<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResourceCategory extends Model
{
    use HasFactory;

    protected $table = 'resource_categories';
    protected $primaryKey = 'resource_category_id';
    
    protected $fillable = [
        'resource_category_name',
        'description'
    ];
}
