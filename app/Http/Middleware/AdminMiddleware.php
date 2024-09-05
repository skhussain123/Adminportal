<?php

namespace App\Http\Middleware;

use App\Models\AdminAuthModel;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (session()->has('uemail')) {
            $email = session('uemail');

            // Use the AdminAuth model to check if the email exists
            $admin = AdminAuthModel::where('email', $email)->first();

            if ($admin) {
                return $next($request);
            } else {
                return redirect()->back()->with('error', 'Unauthorized access');
            }
        } else {
            return redirect(route('loginpage'))->with('error', 'Login First');
        }
    }
}
