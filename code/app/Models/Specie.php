<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specie extends Model
{
    use HasFactory;

    protected $table = 'specie';

    protected $fillable = [
        'specie',
    ];

    public function pet(){
        return $this->hasMany(Pet::class,'specie_id');
    }

    public function breed()
    {
        return $this->hasMany(Breed::class);
    }

}
