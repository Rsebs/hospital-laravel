<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genderM = new Gender();
        $genderM->cod = 'M';
        $genderM->name = 'Masculino';
        $genderM->save();

        $genderF = new Gender();
        $genderF->cod = 'F';
        $genderF->name = 'Femenino';
        $genderF->save();
    }
}
