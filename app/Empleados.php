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
}
