<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Salesman extends Authenticatable {
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'password',
        'avatar',
    ];
}