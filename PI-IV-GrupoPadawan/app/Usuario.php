<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //

    public function cargos(){
        return $this-> belongsTo(Cargos::Class);
    }
}
