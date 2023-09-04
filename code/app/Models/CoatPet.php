<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoatPet extends Model
{
    use HasFactory;

    protected $table = 'coat_pet';

    protected $fillable = ['Coat'];
}
