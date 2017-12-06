<?php

namespace Contaeduc;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    
    public function clientes(){

    	return $this->belongsTo('Contaeduc/Cliente');
    }

    public function empresas(){

    	return $this->belongsTo('Contaeduc/Empresa');
    }

    public function formapagos(){

    	return $this->belongsTo('Contaeduc/FormaPago');
    }

    public function tipodoc(){
    	
    	return $this->belongsTo('Contaeduc/TipoDoc');
    }
}
