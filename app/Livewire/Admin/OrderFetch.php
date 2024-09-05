<?php

namespace App\Livewire\Admin;

use App\Models\ClientAuth;
use App\Models\OrderAuth;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class OrderFetch extends Component
{
    public $searchTerm = '';
    public $searchBy = 'id';
    public $status = '';

    public function render()
    {
        $query = DB::table('wp_clientorders')
            ->leftJoin('wp_clientauth', 'wp_clientorders.user_id', '=', 'wp_clientauth.id')
            ->select(
                'wp_clientorders.*',
                'wp_clientauth.*',
                'wp_clientorders.order_status',
                'wp_clientorders.email as order_email',
                'wp_clientorders.id as order_id',
                'wp_clientauth.email',
                'wp_clientauth.password',
                'wp_clientauth.name',
                 'wp_clientauth.id as clientauth_id'
              
               
            );

          

        // Apply search filter based on selected criteria
        if (!empty($this->searchTerm)) {
            if ($this->searchBy == 'id') {
                $query->where('wp_clientorders.id', $this->searchTerm);
            } elseif ($this->searchBy == 'email') {
                $query->where('wp_clientauth.email', 'like', '%' . $this->searchTerm . '%');
            }
        }

        // Apply status filter if selected
        if ($this->status !== '') {
            $query->where('wp_clientorders.order_status', $this->status);
        }

        // Fetch filtered results with pagination
        $orders = $query->paginate(10);


        return view('livewire.admin.order-fetch', compact('orders'));
    }
}
