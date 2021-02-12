<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Grupo;
use App\Models\Matricula;
use App\Models\Curso;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        self::seedUsers();
    	Grupo::truncate();
    	Matricula::truncate();
        //User::factory(10)->create();
        Grupo::factory(20)->create();
        Matricula::factory(15)->create();
        Curso::factory(10)->create();



        $user = User::factory()
            ->has(Grupo::factory()->count(3))
            ->create();
    }

    private static function seedUsers()
    {
        User::truncate();
        $usuario1 = User::create([
        'name' =>'María Dolores',
        'email' => '8686469@alu.murciaeduca.es',
        'password' =>'123456',
        'usuario_av' => '128892',


        ]);
    }

}
