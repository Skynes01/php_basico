<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    //vincular modelo con tabla
    protected $table ="artist";
    //Establecer la PK
    protected $primaryKey = "ArtistId";
    //Omitir campos de auditoria
    public $timestamps = false;
}
