<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientHealthConcern extends Model
{
    use HasFactory;

    protected $table = 'patient_health_concerns';
    protected $primaryKey = 'health_concern_id';
    public $timestamps = true;

    protected $fillable = [
        'patient_id',
        'concern_name',
        'description',
        'status',
        'diagnosis_date',
        'notes'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class, 'patient_id', 'patient_id');
    }
} 