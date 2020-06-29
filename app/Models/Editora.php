<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
   public function livros(){
    return $this->hasMany('App\Models\Livro');
   }
}
