<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderAuth extends Model
{
    use HasFactory;

    protected $table = 'wp_clientorders';
}
