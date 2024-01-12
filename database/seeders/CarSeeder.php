<?php

namespace Database\Seeders;

use App\Models\Car;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Car::create([//TODO: Se importa use App\Models\User;
            'make'=>'Toyota',
            'model'=>'X8R',
            'year'=>2024,
            'color'=>'Azul',
        ]);
        Car::factory(12)->create();
    }
}
