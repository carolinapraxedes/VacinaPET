<?php

namespace Database\Seeders;

use App\Models\VaccinationLocation;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VaccinationLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VaccinationLocation::create([
            'id'=> 1,
            'name' => 'Centro de vacinação de Zoonose',
            'street' => 'Rua das Alagoas',
            'neighborhood' => 'Pirangi',
            'city'=> 'Natal',
            'state'=> 'RN',
            'phone_number'=> '789845236',
            'email' => 'zoonose.pirangi@gmail.com',
            'created_at' => Carbon::now()
        ]);
        VaccinationLocation::create([
            'id'=> 2,
            'name' => 'Clínica Saúde do seu PET',
            'street' => 'Rua Ponta Negra',
            'neighborhood' => 'Flores',
            'city'=> 'Florencia',
            'state'=> 'RN',
            'phone_number'=> '324597468',
            'email' => 'clinica.saude@gmail.com',
            'created_at' => Carbon::now()
        ]);
    }
}
