<?php

namespace Contaeduc;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    
    public function movimientos(){

    	return $this->hasMany('Contaeduc/Movimiento');
    }

    public function clientes(){

    	return $this->hasMany('Contaeduc/Cliente');
    }

    public function ventas(){

    	return $this->hasMany('Contaeduc/Venta');
    }

    public function proveedores(){

    	return $this->hasMany('Contaeduc/Proveedor');
    }

    public function compras(){

    	return $this->hasMany('Contaeduc/Compra');
    }

    public function users(){

    	return $this->belongsTo('Contaeduc/User');
    }
}
