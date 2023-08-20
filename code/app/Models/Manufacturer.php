<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    protected $table = 'manufacturer';

    protected $fillable = ['name'];

    public function vaccine()
    {
        return $this->belongsToMany(Vaccine::class, 'manufacturer_vaccine');
    }
}
