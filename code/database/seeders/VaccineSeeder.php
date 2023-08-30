<?php

namespace Database\Seeders;

use App\Models\Vaccine;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vaccine::create([
            'id'=> 1,
            'name'=> 'Raiva',
            'minAge' => 3,
            'created_at'=> Carbon::now()
        ]);
        Vaccine::create([
            'id'=> 2,
            'name'=> 'Leishmaniose',
            'minAge' => 3,
            'created_at'=> Carbon::now()
        ]);
        Vaccine::create([
            'id'=> 3,
            'name'=> 'Leucemia Felina',
            'minAge' => 3,
            'created_at'=> Carbon::now()
        ]);
    }
}
