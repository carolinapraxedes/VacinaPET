<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    use HasFactory;

    protected $table = 'vaccine';

    protected $fillable = [
        'name',
        'minAge',
        
    ];

    public function vaccination(){
        return $this->hasMany(Vaccination::class,'vaccine_id');
    }
    public function manufacturer()
    {
        return $this->belongsToMany(Manufacturer::class, 'manufacturer_vaccine');
    }

}
