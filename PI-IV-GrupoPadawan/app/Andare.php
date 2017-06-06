<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Andare extends Model
{
    public function getAtivoAttribute($value){
        return $value == 1 ? 'Sim' : 'Não';
    }
}
