<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class volunteer extends Model
{
    use HasFactory;
    // app/Models/volunteer.php
    protected $fillable = ['name', 'email', 'phone', 'address', 'availability', 'skills'];
}

