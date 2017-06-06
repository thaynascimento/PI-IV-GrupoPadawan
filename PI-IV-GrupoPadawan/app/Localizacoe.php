<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localizacoe extends Model
{
    public function localizacoe(){
        return $this-> belongsTo(Localizacoe::Class);
    }

    public function getAtivoAttribute($value){
        return $value == 1 ? 'Sim' : 'Não';
    }
}
