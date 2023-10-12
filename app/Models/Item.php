<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    
    protected $attributes = [
    ];
    protected $fillable = [
        'image',
        'title',
        'author',
        'status',
        'desc',
    ];
}
