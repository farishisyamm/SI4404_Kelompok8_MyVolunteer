<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourceDetail extends Model
{
    use HasFactory;

    protected $table = 'resource_details';
    protected $primaryKey = 'resource_detail_id';
    
    protected $fillable = [
        'resource_category_id',
        'event_id'
    ];

    public function resourceCategories(){
        return $this->hasMany(ResourceCategory::class, 'resource_category_id', 'resource_category_id');
    }
}
