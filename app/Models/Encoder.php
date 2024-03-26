<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Encoder extends Model
{
    use HasFactory;
 
    protected $fillable = [
        'Fname',
        'Lname',
        'email_address',
        'Phone_number',
        'Role'
    ];
}
