<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailOrders extends Model
{
    protected $fillable = [
        'title',
        'quanity',
        'source',
        'laser',
        'welding',
        'construct',
        'electro',
        'orders_id'
          
    ];

    public function order(){
        return $this->belongsTo(Orders::class);
    }
}
