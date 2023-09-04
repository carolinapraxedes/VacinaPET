<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SizePet extends Model
{
    use HasFactory;

    protected $table = 'size_pet';

    protected $fillable = ['Size'];

}
