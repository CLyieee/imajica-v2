<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Patient extends Model
{
    use HasFactory;

    protected $primaryKey = 'patient_id';
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'contact_number',
        'gender',
        'birthdate',
        'occupation',
        'address',
        'image_path',
        'patient_tier_id'
    ];

    protected $attributes = [
        'image_path' => null
    ];

    public function contact()
    {
        return $this->hasOne(Contact::class, 'patient_id', 'patient_id');
    }

    public function patientTier(): BelongsTo
    {
        return $this->belongsTo(PatientTier::class, 'patient_tier_id');
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class, 'patient_id', 'patient_id');
    }
}
