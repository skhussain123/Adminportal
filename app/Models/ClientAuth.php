<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientAuth extends Model
{
    use HasFactory;

    // Define the fillable attributes
    protected $table = 'wp_clientauth';

    protected $fillable = [
        'id',
        'name',
        'email',
        'password',
        'profile',
        'Access',
    ];
}
