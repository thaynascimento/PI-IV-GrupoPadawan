<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{

    public function cargo(){
        return $this-> belongsTo(Cargo::Class);
    }
}
