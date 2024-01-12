<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

/* TODO: Comando= php artisan make:seeder UserSeeder */
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([//TODO: Se importa use App\Models\User;
            'name'=>'administrador',
            'email'=>'administrador@gmail.com',
            'password'=>Hash::make("12345678"),//TODO: Se importa use Illuminate\Support\Facades\Hash;
        ]);
        User::factory(17)->create();
        
    }
    /**Se ejecuta el comando, despues de hacer esto. php artisan migrate:fresh --seed
*/
}
