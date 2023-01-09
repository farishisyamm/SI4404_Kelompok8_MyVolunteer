<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $table = 'events';
    protected $primaryKey = 'event_id';

    protected $fillable = [
        'user_id',
        'event_name',
        'event_location',
        'longitude',
        'latitude',
        'start_date',
        'end_date',
        'resource_need',
        'event_description',
        'event_status',
        'reward'
    ];

    public function eventresources(){
        return $this->hasMany(EventResource::class, 'event_id', 'event_id')->join('users', 'event_resources.user_id', '=', 'users.user_id');
    }
}
