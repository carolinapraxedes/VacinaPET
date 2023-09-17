<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilePet extends Model
{
    use HasFactory;

    protected $table = 'profile_pet';

    protected $fillable = ['Profile'];

}
