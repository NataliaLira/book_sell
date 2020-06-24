<?php

use Illuminate\Database\Seeder;

class editoras extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('editoras')->insert([
            'nome' => "poliana",
        ]);
        DB::table('editoras')->insert([
            'nome' => "beatrizphp",
        ]);
    }
}
