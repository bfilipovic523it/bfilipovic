<?php

namespace Database\Seeders;

use App\Models\Prijava;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrijavaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Prijava::create([
            'user_id' => 1,
            'obuka_id' => 1,
            'ukupna_cena' => 4999.99,
        ]);

        Prijava::create([
            'user_id' => 1,
            'obuka_id' => 2,
            'ukupna_cena' => 5999.99,
        ]);

        Prijava::create([
            'user_id' => 1,
            'obuka_id' => 3,
            'ukupna_cena' => 7999.99,
        ]);

        Prijava::create([
            'user_id' => 1,
            'obuka_id' => 4,
            'ukupna_cena' => 6999.99,
        ]);

        Prijava::create([
            'user_id' => 1,
            'obuka_id' => 5,
            'ukupna_cena' => 8999.99,
        ]);
        
    }
}
