<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  
    // make array of fillable fields
    protected $fillable = [
        'category_name', 
    ];
}
