<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $primaryKey = 'bar_code';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'bar_code',
        'name',
        'sku',
        'description',
        'product_image',
        'quantity',
        'quantity_in_transit',
        'last_restocked_at',
        'total_stock_lifetime',
        'shipping_type',
        'is_fragile',
        'is_biodegradable',
        'is_frozen',
        'max_temperature',
        'expiry_date',
        'base_price',
        'discounted_price',
        'in_stock',
        'category_id',
        'status',
        'tags'
    ];

    public function category()
    {
        return $this->belongsTo(category::class, 'category_id', 'category_id');
    }
}
