<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'dosage',
        'manufacturer',
        'dosing_interval',
        'vaccine_id',
    ];

    public function vaccination(){
        return $this->hasMany(Vaccination::class,'vaccine_id');
    }

}
