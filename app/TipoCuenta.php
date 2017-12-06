<?php

namespace Contaeduc;

use Illuminate\Database\Eloquent\Model;

class TipoCuenta extends Model
{
    public function cuentas(){

    	return $this->hasMany('Contaeduc/Cuenta');
    }
}
