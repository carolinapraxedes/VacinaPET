<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinarian extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'CRMV_RN',
        'vaccination_id',
    ];

    public function vaccination(){
        return $this->hasMany(Vaccination::class,'veterinarian_id');
    }
}
