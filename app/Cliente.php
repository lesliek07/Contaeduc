<?php

namespace Contaeduc;


use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    
    public function ventas(){

    	return $this->hasMany('Contaeduc/Venta');
    }
    public function empresas(){

    	return $this->belongsTo('Contaeduc/Empresa');
    }
    
}
