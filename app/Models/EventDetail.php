<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventDetail extends Model
{
    use HasFactory;

    protected $table = 'event_details';
    
    protected $fillable = [
        'event_id',
        'event_key',
        'event_value',
        'event_type'
    ];

    public function events(){
        return $this->hasMany(Event::class, 'event_id', 'event_id');
    }
}
