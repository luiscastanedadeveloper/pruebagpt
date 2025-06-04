<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // Placeholder model for a user (model or admin)
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
