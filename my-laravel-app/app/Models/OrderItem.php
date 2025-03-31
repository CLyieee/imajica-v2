<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $table = 'order_items';
    protected $primaryKey = 'item_id';
    
    protected $fillable = [
        'order_id',
        'item_name',
        'quantity',
        'unit_price',
        'total'
    ];

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
}
