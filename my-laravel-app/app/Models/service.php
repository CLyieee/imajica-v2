<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $primaryKey = 'service_id';
    public $incrementing = true;

    
    protected $fillable = [
        'service_name',
        'service_image',
        'branch_code',
        'description',
        'duration',
        'service_category',
        'service_cost',
        'loyalty_pts',
    ];
    
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_code', 'branch_code');
    }

    public function booking()
    {
        return $this->hasMany(Booking::class, 'service_id', 'service_id');
    }
    public function coupon()
    {
        return $this->hasMany(coupon::class, 'service_id', 'service_id');
    }
}
