<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

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
}
