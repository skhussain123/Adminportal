<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminAuthModel;
use App\Models\Writers;
use Illuminate\Contracts\View\View;
use App\Http\Requests\AdminAuthRequest;
use App\Models\Catchlead;
use App\Models\OrderAuth;
use App\Models\Task;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Container\Attributes\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use NunoMaduro\Collision\Contracts\Writer;
use NunoMaduro\Collision\Writer as CollisionWriter;
use PHPUnit\Runner\Baseline\Writer as BaselineWriter;

class Admin extends Controller
{
    public function admindashboard()
    {
        return view('Admin.index');
    }


    public function orderdetailpage(Request $request)
    {
        // Validate the request parameters
        $request->validate([
            'orderid' => 'required|integer',
            'user_id' => 'required|integer'
        ]);

        // Retrieve the order ID and user ID from the request
        $orderId = $request->orderid;
        $userId = $request->user_id;

        // Fetch the order and client data
        $order = OrderAuth::join('wp_clientauth', 'wp_clientorders.user_id', '=', 'wp_clientauth.id')
            ->select(
                'wp_clientorders.*',  // Select all columns from wp_clientorders
                'wp_clientauth.*',    // Select all columns from wp_clientauth
                'wp_clientauth.id as user_id' // Rename the id column from wp_clientauth to user_id
            )
            ->where('wp_clientorders.id', $orderId)
            ->where('wp_clientauth.id', $userId)
            ->first();




        // Check if the order exists
        if (!$order) {
            return redirect()->route('some.route.name')->with('error', 'Order not found.');
        }

        return view('Admin.orderdetail', compact('order'));
    }


    public function assignOrder(Request $request)
    {
        // Validate the request, ensuring 'orderID' is required
        $request->validate([
            'orderID' => 'required',
            'userID' => 'required'
        ]);

        // Retrieve the order ID from the request
        $orderID = $request->orderID;
        $userID = $request->userID;

        $writers = Writers::all();

        return view('Admin.assignorder', compact('writers', 'orderID', 'userID'));
    }


    public function FinalAssignTask(Request $request)
    {

        $request->validate([
            'orderID' => 'required',
            'WriterID' => 'required',
            'UserID' => 'required',
        ]);


        Task::create([
            'order_id' => $request->orderID,
            'writer_id' => $request->WriterID,
            'user_id' => $request->UserID,
            'status' => 'assigned',
            'startDate' => now(),
            'EndDate' => null,
        ]);


        return redirect()->back()->with('success', 'Task has been successfully assigned.');
    }





    public function workingorder()
    {

        return view('Admin.workingorder');
    }




    public function Writersdetailpage()
    {

        return View('Admin.writerdetail');
    }

    public function userdetailpage()
    {

        return View('Admin.userdetail');
    }


    ///Login Register Routes
    public function loginFunction(AdminAuthRequest $adminAuthRequest)
    {
        // Retrieve the user by email
        $data = AdminAuthModel::where('Email', $adminAuthRequest->input('email'))->first();

        if (session()->has('uemail')) {
            return redirect()->route('loginpage')->with('error', 'Another user is logged in.');
        }

        if ($data && Hash::check($adminAuthRequest->input('password'), $data->Password)) {
            $adminAuthRequest->session()->put('uemail', $data->Email);

            return redirect()->route('dashboardpage')->with('success', 'User logged in.');
        }

        return redirect()->route('loginpage')->with('error', 'Invalid credentials.');
    }

    public function RegisterFunction(Request $request)
    {
        // Validate the request data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Check if there's already a registered user
        $existingUser = AdminAuthModel::first();

        if ($existingUser) {
            // If there is an existing user, return an error message
            return redirect()->back()->with('error', 'Admin limit reached. Only one user can be registered.');
        }

        // Create a new user
        $user = new AdminAuthModel();
        $user->Email = $request->email;
        $user->Password = Hash::make($request->password);
        $user->save();

        // Store the user email in the session
        session()->put('uemail', $request->email);

        // Redirect to the dashboard with a success message
        return redirect()->route('dashboardpage')->with('success', 'Registration successful!');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('loginpage')->with('success', 'Logged out successfully.');
    }

    /// pages Redirect function
    public function adminRegisterpage()
    {

        return View('Admin.register');
    }

    public function adminloginpage()
    {
        return view('Admin.login');
    }

    public function adminuserspage()
    {
        return view('Admin.users');
    }

    public function adminwriterspage()
    {
        return view('Admin.writers');
    }

    public function adminleadspage()
    {
        // Retrieve all data from the wp_Catchleads table
        $leads = Catchlead::all();

        // Pass the data to the view
        return view('Admin.leads', compact('leads'));
    }

    public function adminorderspage()
    {

        return View('Admin.orders');
    }

    public function adminvisitorspage()
    {

        return View('Admin.visitors');
    }

    public function adminprofilepage()
    {

        return View('Admin.profile');
    }



    public function AddWriters(Request $request)
    {
        // Validate the input
        $request->validate([
            'email' => 'required|email', // Validate email format
            'password' => 'required|min:6', // Validate password with a minimum of 6 characters
        ]);

        // Check if the email already exists in the `writers` table
        $existingWriter = Writers::where('email', $request->email)->first();

        if ($existingWriter) {
            return redirect()->back()->with('error', 'Writer already added');
        }

        Writers::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('success', 'Writer added successfully');
    }
}
