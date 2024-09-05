<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Writers extends Model
{
    use HasFactory;

    protected $table = 'wp_allwriters';

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'name',
        'email',
        'password',
        'rating',
        'status',
        'created_at',
        'updated_at',
    ];
}
