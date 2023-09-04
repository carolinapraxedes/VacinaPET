<?php

namespace Database\Seeders;

use App\Models\ProvenancePet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvenancePetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provenancePetTypes = [
            'Adotado',
            'Comprado',
            'Encontrado sem tutor',
            'Ganhou',
            'Herdou',
            'Outra'
        ];
        
        foreach ($provenancePetTypes as $type) {
            ProvenancePet::create([
                'Provenance' => $type
            ]);
        }
        
    }
}
