<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     //vincular modelo con tabla
     protected $table ="customer";
     //Establecer la PK
     protected $primaryKey = "CustomerId";
     //Omitir campos de auditoria
     public $timestamps = false;

    //Relacion 1 m cliente y sus facturas
    public function facturas(){
        //Metodo eloquent: hasmany

        return $this->hasMany('App\Factura', 'CustomerId');

    }

}
