<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsuarioGrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('usuario_grupos')->insert([
            'fk_usuario_id' => 1,
            'fk_grupo_id' => 1,
            'predeterminado' => 1


        ]);
        //
    }
}
