<?php

use Illuminate\Database\Seeder;

class Livros extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('livros')->insert([
            'titulo'=>'O ùltimo Teorema de Fermat',
            'descricao' => 'LALAOREM LROLIJ ASODK',
            'editoras_id' => 1,
            'created_at' => '2020-08-07 11:00:00',
            'updated_at' => '2020-08-07 11:00:00'
        ]);
        DB::table('livros')->insert([
            'titulo'=>'Clean Code',
            'descricao' => 'LALAOREM LROLIJ ASODK',
            'editoras_id' => 1,
            'created_at' => '2020-08-07 11:00:00',
            'updated_at' => '2020-08-07 11:00:00'
        ]);
        DB::table('livros')->insert([
            'titulo'=>'Clean Coder',
            'descricao' => 'LALAOREM LROLIJ ASODK',
            'editoras_id' => 1,
            'created_at' => '2020-08-07 11:00:00',
            'updated_at' => '2020-08-07 11:00:00'
        ]);
        DB::table('livros')->insert([
            'titulo'=>'Guliver',
            'descricao' => 'LALAOREM LROLIJ ASODK',
            'editoras_id' => 1,
            'created_at' => '2020-08-07 11:00:00',
            'updated_at' => '2020-08-07 11:00:00'
        ]);        
    }
}
