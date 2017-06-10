<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    public function cargo(){
        return $this-> belongsTo(Cargo::Class);
    }

    public function sala(){
        return $this-> belongsTo(Sala::Class);
    }

    public function getAtivoAttribute($value){
        return $value == 1 ? 'Sim' : 'Não';
    }

    public function getLiderDeFugaAttribute($value){
        return $value == 1 ? 'Sim' : 'Não';
    }
}
