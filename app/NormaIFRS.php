<?php

namespace Contaeduc;

use Illuminate\Database\Eloquent\Model;

class NormaIFRS extends Model
{
    public function cuentas(){

    	return $this->hasMany('Contaeduc/Movimiento');
    }
}
