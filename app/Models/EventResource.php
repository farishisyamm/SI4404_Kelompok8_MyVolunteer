<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventResource extends Model
{
    use HasFactory;

    protected $table = 'event_resources';
    
    protected $fillable = [
        'event_id',
        'user_id',
        'apply_date',
        'er_status'
    ];

    public function events(){
        return $this->hasMany(Event::class, 'event_id', 'event_id');
    }

    public function users(){
        return $this->hasMany(User::class, 'user_id', 'user_id');
    }
}
