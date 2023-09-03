<?php

namespace Database\Seeders;

use App\Models\Tutor;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tutor::create([
            'id'=> 1,
            'name' => 'Carolina Silva',
            'email' => 'teste@teste.com',
            'numberPhone' => '88888888',
            'CPF' => '78945646564',
            'created_at' => Carbon::now()
        ]);
    }
}
