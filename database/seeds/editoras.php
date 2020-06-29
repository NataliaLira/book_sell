<?php

use Illuminate\Database\Seeder;

class Editoras extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('editoras')->insert([
            'nome'=>'Saraiva'
        ]);
        DB::table('editoras')->insert([
            'nome'=>'Rocco'
        ]);
        DB::table('editoras')->insert([
            'nome'=>'Cia das Letras'
        ]);
        DB::table('editoras')->insert([
            'nome'=>'Abril'
        ]);
        DB::table('editoras')->insert([
            'nome'=>'Sextante'
        ]);
    }
}
