<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorPet extends Model
{
    use HasFactory;
    protected $table = 'color_pet';

    protected $fillable = ['Color'];
}
