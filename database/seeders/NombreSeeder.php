<?php

namespace Database\Seeders;

use App\Models\Nombre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NombreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Nombre::factory(10)->create();
    }
}
