<?php

namespace Database\Seeders;

use App\Models\ColorPet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorPetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $colorsPet =[
            'Amarela',
            'Amarela/Branca',
            'Bege',
            'Bege/Branca',
            'Bege/Cinza',
            'Bege/Marrom',
            'Bege/Marrom/Branca',
            'Bege/Preta',
            'Branca',
            'Branca/Amarela',
            'Branca/Cinza',
            'Branca/Marrom',
            'Branca/Preta',
            'Caramelo',
            'Cinza',
            'Cinza/Branca',
            'Marrom',
            'Marrom/Preta/Branca',
            'Preta',
            'Preta/Amarela',
            'Preta/Bege',
            'Preta/Branca',
            'Preta/Cinza',
            'Preta/Marrom',
            'Preta/Amarela (Casco de tartaruga)',
            'Rajada',
            'Rajada/Branca',
            'Tigrada',
            'Tigrada/Branca',
            'Tricolor (Branca/Preta/Amarela)'
        ];

        foreach ($colorsPet as $type) {
            ColorPet::create([
                'Color' => $type,
            ]);
        }
    }
}
