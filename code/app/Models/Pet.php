<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pet extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'gender',
        'age',
        'color',
        'description',
        'dateBirth',
    ];

    protected $casts = [
        'dateBirth' => 'date',
    ];

    public function vaccination(){
        return $this->belongsTo(Vaccination::class,'vaccination_id');
    }
    public function appointment(){
        return $this->belongsTo(Appointment::class,'appointment_id');
    }
    public function breed(){
        return $this->belongsTo(Breed::class,'breed_id');
    }
    public function specie(){
        return $this->belongsTo(Specie::class,'specie_id');
    }
    public function tutor(){
        return $this->belongsTo(Tutor::class,'tutor_id');
    }

}
