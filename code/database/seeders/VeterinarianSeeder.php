<?php

namespace Database\Seeders;

use App\Models\Veterinarian;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VeterinarianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Veterinarian::create([
            'id'=> 1,
            'name'=> 'Luiza Tereza Silva',
            'email' => 'luiza.silva@gmail.com',
            'CRMV_RN' => '45678',
            'created_at' => Carbon::now()
        ]);
        Veterinarian::create([
            'id'=> 2,
            'name'=> 'João Pereira Silva',
            'email' => 'joao.pereira@gmail.com',
            'CRMV_RN' => '45655',
            'created_at' => Carbon::now()
        ]);
    }
}
