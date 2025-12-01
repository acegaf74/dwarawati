<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'gender',
        'address',
        'phone_number',
        'date_of_entry',
        'date_of_exit',
        'user_id'
    ];
}
