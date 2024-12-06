<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // These are the fields that can be mass-assigned
    protected $fillable = ['name', 'description', 'price', 'image'];
    
}
