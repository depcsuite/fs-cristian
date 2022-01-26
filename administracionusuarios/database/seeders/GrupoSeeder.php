<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        \DB::table('grupos')->insert([
            'nombre' => 'ABC',
            'activo' => 1
        ]);
        //
    }
}
