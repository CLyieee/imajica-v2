<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coupon extends Model
{
    use HasFactory;

    protected $table = 'coupons';
    protected $primaryKey = 'coupon_code';
    public $incrementing = false;
    protected $keyType = 'bigInteger';
    public $timestamps = false;

    protected $fillable = [
        'coupon_code',
        'discount_name',
        'description',
        'discount_type',
        'discount_value',
        'applicable_service',
        'start_end_date',
        'new_customer',
        'branch_code'
    ];

    public function coupon()
    {
        return $this->belongsTo(Branch::class, 'branch_code', 'branch_code');
    }
}
