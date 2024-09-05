<?php

namespace App\Livewire\Admin;

use App\Models\ClientAuth;
use Livewire\Component;

class FetchUser extends Component
{

    public $searchTerm = '';
    public $searchBy = 'id'; // Default search by ID


    public function render()
    {

        $query = ClientAuth::query();

        // Apply search filter if search term is provided
        if (!empty($this->searchTerm)) {
            if ($this->searchBy == 'id') {
                $query->where('id', $this->searchTerm);
            } elseif ($this->searchBy == 'email') {
                $query->where('email', 'like', '%' . $this->searchTerm . '%');
            }
        }

        // Add pagination
        $users = $query->paginate(10); // Adjust the number of items per page as needed


        return view('livewire.admin.fetch-user',compact('users'));
    }

    public function updateAccess($userId, $access)
    {
        $user = ClientAuth::find($userId);
        if ($user) {
            $user->Access = $access;
            $user->save();
        }
    }


}
