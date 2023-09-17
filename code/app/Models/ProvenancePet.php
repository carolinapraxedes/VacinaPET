<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvenancePet extends Model
{
    use HasFactory;

    protected $table = 'provenance_pet';

    protected $fillable = ['Provenance'];
}
