<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Staff;
class positionModel extends Model
{
    use HasFactory;

    protected $table = 'position';
    protected $primaryKey = 'position_id';
    public $incrementing = false;
    protected $keyType = 'bigInteger';
    public $timestamps = false;
    protected $fillable = [
        'position_id',
        'position_name',
        'department',
        'description',
        'status',
    ];
    public function staff()
    {
        return $this->hasMany(Staff::class, 'position_id', 'position_id');
    }
}
