<?php

namespace App\Livewire\Admin;

use App\Models\Writers;
use Livewire\Component;

class WritersFetch extends Component
{



    public $searchTerm = ''; // Search by email+

    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];



    public function updateAccess($userId, $status)
    {
        $writer = Writers::find($userId);
        if ($writer) {
            $writer->status = $status;
            $writer->save();
        }
    }




    public function render()
    {

        $query = Writers::query();

        // Apply search filter for email
        if (!empty($this->searchTerm)) {
            $query->where('email', 'like', '%' . $this->searchTerm . '%');
        }

        // Add pagination
        $writers = $query->paginate(10); // Adjust the number of items per page as needed


        return view('livewire.admin.writers-fetch',compact('writers'));
    }
}
