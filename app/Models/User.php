<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'user_id';
    
    protected $fillable = [
        'user_email',
        'user_full_name',
        'user_password',
        'level',
        'status'
    ];

    protected $hidden = [
        'user_password'
    ];
}
