<?php

namespace Database\Seeders;

use App\Models\Kategorija;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategorijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Kategorija::create(['naziv' => 'Rad na racunaru']);
        Kategorija::create(['naziv' => 'Bezbednost na radu']);
        Kategorija::create(['naziv' => 'Prodaja']);
        Kategorija::create(['naziv' => 'Zastita zivotne sredine']);
        Kategorija::create(['naziv' => 'Menadzment']);
    }
}
