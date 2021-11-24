<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Energy extends Model
{
    protected $fillable = ['etatCharge', 'consommation', 'statutCharge', 'humidity', 'tempPann', 'tempAmb', 'cycleCharge'];

    use HasFactory;
}
