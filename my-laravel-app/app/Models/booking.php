<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;


    protected $table = 'bookings';

    protected $primaryKey = 'booking_id';
    public $timestamps = false;


    protected $fillable = [
        'id',
        'status',
        'start_date',
        'end_date',
        'id',
        'branch_code',
        'patient_id',
        'useReward',
        'remarks',
    ];
    

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'service_id');
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_code', 'branch_code');
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'patient_id');
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class, 'id', 'id');
    }
    
}
