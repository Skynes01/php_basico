<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    protected $table="invoice";
    //establecer la PK para la entidad(por defecto: id)
    protected $primaryKey = "InvoiceId";
    //Omitir campos de auditoria
    public $timestamps = false;

    //Relacion m m entre factura y canciones
    public function canciones(){
        //relacion mm: belongsToMany()
        //1. Modelo a relacionar
        //2. La tabla pivot
        //3. FK del presente modelo de la table pivot
        //4. FK del modelo relaciona de la tabla pivot
        return $this->belongsToMany('App\Cancion',
                                    'invoiceline',
                                    'InvoiceId',
                                    'TrackId');
    }
}
