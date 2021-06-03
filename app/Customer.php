<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
     //vincular modelo con tabla
     protected $table ="customer";
     //Establecer la PK
     protected $primaryKey = "Id";
     //Omitir campos de auditoria
     public $timestamps = false;
}
