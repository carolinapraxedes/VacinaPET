<?php

namespace Database\Seeders;

use App\Models\CoatPet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoatPetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $coatPetTypes = [
            'Longo',
            'Médio',
            'Curto'
        ];
        
        foreach ($coatPetTypes as $type) {
            CoatPet::create([
                'Coat' => $type, 
            ]);
        }
        
    }
}
