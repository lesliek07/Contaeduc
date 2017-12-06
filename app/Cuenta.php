<?php

namespace Contaeduc;


use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
	
    public function movimientos(){

    	return $this->hasMany('Contaeduc/Movimiento');
    }

    public function normaifrs(){

      return $this->belongsTo('Contaeduc/NormaIFRS');
    }

    public function tipocuenta(){

    	return $this->belongsTo('Contaeduc/TipoCuenta');
    }

}
