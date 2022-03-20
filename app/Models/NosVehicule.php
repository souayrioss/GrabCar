<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NosVehicule extends Model
{
    protected $table="voiture";
    protected $guarded=[];
    use HasFactory;
}
