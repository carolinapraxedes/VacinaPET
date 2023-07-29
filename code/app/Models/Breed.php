<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    use HasFactory;

    protected $table = 'breed';

    protected $fillable = [
        'breed',
    ];

    public function pet(){
        return $this->hasMany(Pet::class,'breed_id');
    }
    public function specie()
    {
        return $this->belongsTo(Species::class);
    }
}
