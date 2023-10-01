<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RGA extends Model
{
    use HasFactory;

    protected $table = 'rga';

    protected $fillable = [
        'rga',
        'nameTutor',
        'emailTutor',
        'cpfTutor',
        'dateBirthTutor',
        'numberPhoneTutor',
        'ageTutor',


        'namePet',
        'dateBirthPet',
        'agePet',
        'speciePet_id',
        'breedPet_id',
        'genderPet',


        'colorPet_id',
        'sizePet_id',
        'coatPet_id',
        'profilePet_id',
        'provenancePet_id',
        'pet_id',
        'process_id'
        
    ];
    protected $dates = [
        'dateBirthTutor'=> 'date',
        'dateBirthPet'=> 'date'     
    ];

    public function pet(){
        return $this->belongsTo(Pet::class,'pet_id');
    }

    public function specie(){
        return $this->belongsTo(Specie::class,'speciePet_id');
    }
    public function breed(){
        return $this->belongsTo(Breed::class,'breedPet_id');
    }

    public function color(){
        return $this->belongsTo(ColorPet::class,'colorPet_id');
    }
    public function sizePet(){
        return $this->belongsTo(SizePet::class,'sizePet_id');
    }
    public function coat(){
        return $this->belongsTo(CoatPet::class,'coatPet_id');
    }
    public function profilePet(){
        return $this->belongsTo(ProfilePet::class,'profilePet_id');
    }

    public function provenancePet(){
        return $this->belongsTo(ProvenancePet::class,'provenancePet_id');
    }

    public function process(){
        return $this->hasOne(ProcessRGA::class,'process_id');
    }

}
