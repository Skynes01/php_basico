<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Disco extends Model
{
    //vincular modelo con tabla
    protected $table ="album";
    //Establecer la PK
    protected $primaryKey = "AlbumId";
    //Omitir campos de auditoria
    public $timestamps = false;

    //Inverso de la relacion muchos a 1
    public function artistas(){
        //belongsTo: relacion m a 1
        return $this->belongsTo('App\Artista' ,'ArtistId');
    }

}
