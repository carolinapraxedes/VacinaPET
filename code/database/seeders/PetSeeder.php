<?php

namespace Database\Seeders;

use App\Models\Pet;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pet::create([
            'id' => 1,
            'name' => 'Lua',
            'gender'=> 'F',
            'age'=> 0,
            'dateBirth'=> Carbon::now(),
         
            'created_at' => Carbon::now(),
            'breed_id' => 1,
            'specie_id' => 2,
            'tutor_id' => 1
        ]);
    }
}
