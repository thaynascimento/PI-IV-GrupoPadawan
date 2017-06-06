<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    public function usuario(){
        return $this-> belongsTo(Usuario::Class);
    }

    public function getAtivoAttribute($value){
        return $value == 1 ? 'Sim' : 'Não';
    }
}
