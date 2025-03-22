<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';
    public $timestamps = false; // Disable timestamps
    
    protected $fillable = [
        'supplier_name',
        'email',
        'contactNumber',
        'supplier_type',
        'address',
        'product_offered',
        'notes',
    ];
}
