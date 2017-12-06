<?php

namespace Contaeduc;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    //
    public function proveedores(){

    	return $this->belongsTo('Contaeduc/Proveedor');
    }

    public function formapagos(){

    	return $this->belongsTo('Contaeduc/FormaPago');
    }

    public function empresas(){

    	return $this->belongsTo('Contaeduc/Empresa');
    }
    public function tipodoc(){

        return $this->belongsTo('Contaeduc/TipoDoc');
    }
}