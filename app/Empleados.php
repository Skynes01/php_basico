<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    //vincular modelo con tabla
    protected $table ="employee";
    //Establecer la PK
    protected $primaryKey = "EmployeeId";
    //Omitir campos de auditoria
    public $timestamps = false;

    //Relacion 1-M cliente
    public function clientes(){
        return $this->hasMany('App\Customer', 'SupportRepId');
    }

    //Relacion 1-M Facturas(a traves del cliente)
    public function facturas(){
        return $this->hasManyThrough('App\Factura',
                                     'App\Customer',
                                     'SupportRepId', //FK del abuelo
                                     'CustomerId',
                                     'EmployeeId',
                                     'CustomerId');
    }

}
