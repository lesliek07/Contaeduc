<?php

namespace Contaeduc;

use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{
    public function movimientos(){

    	return $this->hasMany('Contaeduc/Movimiento');
    }
}
