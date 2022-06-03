<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categoria_receta')->insert(
            [
                'nombre'=>'Comida Mexicana',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ]
        );
        DB::table('categoria_receta')->insert(
            [
                'nombre'=>'Comida Italiana',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ]
        );
        DB::table('categoria_receta')->insert(
            [
                'nombre'=>'Comida Peruana',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ]
        );
        DB::table('categoria_receta')->insert(
            [
                'nombre'=>'Comida Francesa',
                'created_at'=>date('Y-m-d H:i:s'),
                'updated_at'=>date('Y-m-d H:i:s')
                ]
        );
    }
}
