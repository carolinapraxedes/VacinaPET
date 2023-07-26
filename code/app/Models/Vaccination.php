<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    use HasFactory;

    protected $fillable = [
        'administrationDate',
        'lote',
        'dose',
        'vaccine_id',
        'veterinarian_id',
        'pet_id'
    ];

    public function vaccine(){
        return $this->belongsTo(Vaccine::class,'vaccine_id');
    }

    public function veterinarian(){
        return $this->belongsTo(Veterinarian::class,'veterinarian_id');
    }

    public function pet(){
        return $this->belongsTo(Pet::class,'pet_id');
    }
}
