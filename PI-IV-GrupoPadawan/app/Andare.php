<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Andare extends Model
{
    public function localizacao(){
        return $this-> belongsTo(Localizacoe::Class);
    }
}
