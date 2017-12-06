<?php

namespace Contaeduc;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    public function user()
{
    return $this
        ->belongsToMany('Contaeduc\User')
        ->withTimestamps();
}
}
