<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'department_name',
        'department_code',
        'department_head',
        'parent_department',
        'status',
        'description'
    ];

    public function head()
    {
        return $this->belongsTo(Staff::class, 'department_head');
    }

    public function parentDept()
    {
        return $this->belongsTo(Department::class, 'parent_department');
    }
} 