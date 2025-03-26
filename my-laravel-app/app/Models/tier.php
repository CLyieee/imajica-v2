<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tier extends Model
{
    use HasFactory;
    protected $primaryKey = 'patient_tier_id';
    protected $fillable = [
        'tier_name',
    ];

    public function patient()
    {
        return $this->hasMany(Patient::class, 'patient_tier_id', 'patient_tier_id');
    }
   
}
