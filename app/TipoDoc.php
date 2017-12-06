<?php

namespace Contaeduc;

use Illuminate\Database\Eloquent\Model;

class TipoDoc extends Model
{
    public function ventas(){

    	return $this->hasMany('Contaeduc/Venta');
    }
}
