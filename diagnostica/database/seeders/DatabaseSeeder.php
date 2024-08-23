<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
         \App\Models\Empleado::factory()->create([
            'nombres' => 'Silvio Antonio',
            'apellidos' => 'Vigil Cuadra',
            'cedula' => '0011203021069F',
            'ciudad' => 'Managua',
            'cargo' => 'Pasante',
            'salario_base' => '6000',
        ]);

        \App\Models\Empleado::factory()->create([
            'nombres' => 'Synthia Pamella',
            'apellidos' => 'Valezka Gonzalez',
            'cedula' => '0011203021499H',
            'ciudad' => 'Chinandega',
            'cargo' => 'Pasante',
            'salario_base' => '6500',
        ]);

        \App\Models\Empleado::factory()->create([
            'nombres' => 'Megan Melissa',
            'apellidos' => 'Bougle Downs',
            'cedula' => '0031213021579R',
            'ciudad' => 'Corn Island',
            'cargo' => 'Pasante',
            'salario_base' => '6100',
        ]);

        \App\Models\Empleado::factory()->create([
            'nombres' => 'Megan Amara',
            'apellidos' => 'Antonette Ups',
            'cedula' => '0041343021778G',
            'ciudad' => 'Bluefields',
            'cargo' => 'Gerente',
            'salario_base' => '15000',
        ]);

        \App\Models\Empleado::factory()->create([
            'nombres' => 'Oscar Mejia',
            'apellidos' => 'Artiles Andanueva',
            'cedula' => '004134302092L',
            'ciudad' => 'Jinotega',
            'cargo' => 'Jefe',
            'salario_base' => '20000',
        ]);
    }
    
}
