<?php

namespace Contaeduc;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //
    public function compras(){

    	return $this->hasMany('Contaeduc/Compra');
    }
    public function empresas(){

    	return $this->hasMany('Contaeduc/Empresa');
    }
}
