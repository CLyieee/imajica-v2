<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $primaryKey = 'patient_id';
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'contact_number',
        'birthdate',
        'gender',
        'patient_tier_id',
        'occupation',
        'address',
        'emergency_contact_name',
        'emergency_contact_number',
        'medical_concerns',
        'current_medications',
        'note_from_admin',
        'image_path'  // Add this to fillable
    ];

    protected $attributes = [
        'image_path' => null  // Set default value to null
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
