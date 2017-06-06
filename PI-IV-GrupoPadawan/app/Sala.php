<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    public function andar(){
        return $this-> belongsTo(Andare::Class);
    }

    public function localizacao(){
        return $this-> belongsTo(Localizacoe::Class);
    }

    public function getAtivoAttribute($value){
        return $value == 1 ? 'Sim' : 'Não';
    }
}
