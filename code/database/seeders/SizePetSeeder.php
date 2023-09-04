<?php

namespace Database\Seeders;

use App\Models\SizePet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SizePetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sizePetTypes = [
            'Gigante',
            'Grande',
            'Médio',
            'Pequeno'
        ];
        
        foreach ($sizePetTypes as $type) {
            SizePet::create([
                'Size' => $type,
            ]);
        }
        
    }
}
