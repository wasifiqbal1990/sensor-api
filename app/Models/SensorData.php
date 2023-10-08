<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{
    use HasFactory;

    public $fillable = [
        'sensor_id',
        'ax','ay','az','asqrt',
        'gx','gy','gz',
        'mdirection','mx','my','mz',
        'pressure','temperature','altitude','strain1','strain2'
    ];
}
