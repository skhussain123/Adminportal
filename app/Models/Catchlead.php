<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catchlead extends Model
{
    use HasFactory;

    // Specify the table associated with the model
    protected $table = 'wp_Catchleads';

    // The attributes that are mass assignable
    protected $fillable = [
        'email',
        'paper_type',
        'study_level',
        'pages',
        'Access',
        'price',
    ];

    // The attributes that should be cast to native types
    protected $casts = [
        'price' => 'decimal:2',
        'pages' => 'integer',
    ];

    // The attributes that should be hidden for arrays
    protected $hidden = [];

    // The attributes that should be appended to the model's array form
    protected $appends = [];

    // The model's default values for attributes
    protected $attributes = [
        'Access' => '1',
    ];
}
