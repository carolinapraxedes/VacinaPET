<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccination extends Model
{
    use HasFactory;
    protected $table = 'vaccination';

    protected $fillable = [

        'pet_id',
        'administrationDate',
        'lote',
        'dose',
        'rga',
        'vaccine_id',
        'manufacturer_id',
        'vaccination_location_id',
        'veterinarian_id',
    ];
    public function pet(){
        return $this->belongsTo(Pet::class,'pet_id');
    }

    public function vaccine(){
        return $this->belongsTo(Vaccine::class,'vaccine_id');
    }
    public function manufacturer(){
        return $this->belongsTo(Manufacturer::class,'manufacturer_id');
    }

    public function vaccinationLocation()
    {
        return $this->belongsTo(VaccinationLocation::class, 'vaccination_location_id');
    }
    public function veterinarian(){
        return $this->belongsTo(Veterinarian::class,'veterinarian_id');
    }

    
}
