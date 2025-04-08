<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patient extends Model
{
    use HasFactory;

    

    protected $primaryKey = 'patient_id';
    protected $fillable = [
        'image_path',
        'firstname',
        'lastname',
        'email',
        'gender',
        'birthdate',
        'contact_number',
        'emergency_contact_name',
        'emergency_contact_number',
        'patient_tier_id',
        'occupation',
        'address',
        'medical_concerns',
        'current_medications',
        'note_from_admin',
        'created_at',
        'updated_at',
    ];

    public function contact()
    {
        return $this->hasOne(Contact::class, 'patient_id', 'patient_id');
    }

    public function tier()
    {
        return $this->belongsTo(Tier::class, 'patient_tier_id', 'patient_tier_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'patient_id', 'patient_id');
    }
}
