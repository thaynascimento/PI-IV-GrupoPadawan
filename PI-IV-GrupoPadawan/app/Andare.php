<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Andar extends Model
{
    public function localizacao(){
        return $this-> belongsTo(Localizacoe::Class);
    }
}
