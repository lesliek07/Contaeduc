<?php

namespace Contaeduc;

use Illuminate\Database\Eloquent\Model;

class FormaPago extends Model
{
    public function compras(){

    	return $this->hasMany('Contaeduc/Compra');
    }

    public function ventas(){

    	return $this->hasMany('Contaeduc/Venta');
    }
}
