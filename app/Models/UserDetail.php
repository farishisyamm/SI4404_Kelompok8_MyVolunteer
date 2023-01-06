<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    use HasFactory;

    protected $table = 'user_details';
    
    protected $fillable = [
        'user_id',
        'user_key',
        'user_value',
        'user_type'
    ];

    public function users(){
        return $this->hasMany(Yser::class, 'user_id', 'user_id');
    }
}
