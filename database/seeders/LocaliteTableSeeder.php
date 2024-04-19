<?php

namespace Database\Seeders;

use App\Models\Localite;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocaliteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Localite::Create([
            'codeLocalite'=>'ADJ',
            'nomLocalite'=>'Adjarra'
        ]);

        Localite::Create([
            'codeLocalite'=>'CTN',
            'nomLocalite'=>'Cotonou'
        ]);
    }
}
