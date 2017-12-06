<?php

namespace Contaeduc;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{

    public function empresas(){

    	return $this->belongsTo('Contaeduc/Empresa');
    }

   	public function cuentas(){

   		return $this->belongsTo('Contaeduc/Cuenta');
   	}

   	public function debehabers(){

   		return $this->belongsTo('Contaeduc/DebeHaber');
   	}
   	public function operacions(){

   		return $this->belongsTo('Contaeduc/Operacion');
   	}

}
