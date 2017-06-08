<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RotaFuga extends Model
{
    protected $table = 'rotafugas';

    public function sala(){
        return $this-> belongsTo(Sala::Class);
    }

    public function getAtivoAttribute($value){
        return $value == 1 ? 'Sim' : 'Não';
    }
}
