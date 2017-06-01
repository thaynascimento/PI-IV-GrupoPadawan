<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargos extends Model
{
    public function usuarios(){
        return $this-> belongsTo(Usuarios::Class);
    }
}
