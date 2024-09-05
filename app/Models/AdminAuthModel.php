<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAuthModel extends Model
{
    use HasFactory;

    // Define the table associated with this model
    protected $table = 'admins';

    // Set the fillable properties
    protected $fillable = [
        'AdminName',
        'Email',
        'Password'
    ];

 
    public $timestamps = false;
}
