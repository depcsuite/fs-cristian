<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \DB::table('areas')->insert([
            'ncarea' => "SISTEMAS",
            'descarea' => 'Area sistemas',
            'activo' => 1


        ]);
    }
}
