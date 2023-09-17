<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'firstname' => 'Admin',
            'lastname' => 'Admin',
            'email' => 'admin@argon.com',
            'password' => bcrypt('secret')
        ]);

        $this->call(SpecieSeeder::class);
        $this->call(BreedSeeder::class);
        $this->call(ManufacturerSeeder::class);
        $this->call(VaccinationLocationSeeder::class);
        $this->call(VaccineSeeder::class);
        $this->call(VeterinarianSeeder::class);

        $this->call(TutorSeeder::class);
        $this->call(PetSeeder::class);

        $this->call(ColorPetSeeder::class);
        $this->call(SizePetSeeder::class);
        $this->call(CoatPetSeeder::class);
        $this->call(ProfilePetSeeder::class);
        $this->call(ProvenancePetSeeder::class);
    }
}
