<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('usuarios')->insert([
            'usuario'=>'usuario1',
            'nombre' => 'Usuario',
            'apellido' => 'Usuario',
            'email' => 'user@pcsuite.com',
            'clave' => bcrypt('laravel'),
            'activo' => 1,
            'root' => 1,
            'fk_grupo_id' => 1




        ]);
        //
    }
}
