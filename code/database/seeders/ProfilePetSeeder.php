<?php

namespace Database\Seeders;

use App\Models\ProfilePet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfilePetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profilePetTypes = [
            'Animal Comunitário',
            'De morador de rua',
            'Domiciliado',
            'Guarda provisória'
        ];
        
        foreach ($profilePetTypes as $type) {
            ProfilePet::create([
                'Profile' => $type, 
            ]);
        }
        
    }
}
