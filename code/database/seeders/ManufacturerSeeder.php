<?php

namespace Database\Seeders;

use App\Models\Manufacturer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;


class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manufacturer::create([
            'id'=> 1,
            'name'=> 'Pfizer',
            'created_at'=>Carbon::now()
        ]);

        Manufacturer::create([
            'id' => 2,
            'name' => 'Johnson & Johnson',
            'created_at' => Carbon::now(),
        ]);
    }
}
