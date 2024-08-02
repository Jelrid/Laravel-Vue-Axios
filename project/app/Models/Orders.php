<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'quanity',
        'source',
        'laser',
        'welding',
        'construct',
        'electro',
        'index'
    ];

}
