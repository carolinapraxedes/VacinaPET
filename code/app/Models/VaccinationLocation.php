<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VaccinationLocation extends Model
{
    protected $table = 'vaccination_location';

    protected $fillable = [
        'name',
        'street',
        'neighborhood',
        'city',
        'state',
        'phone_number',
        'email'
        
    ];

    public function vaccinations()
    {
        return $this->hasMany(Vaccination::class, 'vaccination_location_id');
    }

}
