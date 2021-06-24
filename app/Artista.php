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

    //defirnir relacion artidas disco
    public function discos(){
        //hasmany
        //1. Modelo a relacionar
        //2. FK del modelo papa
        //3. FK del Modelo hijo
        return $this->hasMany('App\Disco' ,'ArtistId');

    }

    //definir la relacion multitabla entre
    //artistas y sus canciones(tracks)
    public function canciones(){
        //hasManyThrough:
        //1 Modelo Nieto
        //2 Modelo Papa
        //3 Fk del Abuelo del Papa
        //4 Fk del Papa en el Nieto
        //5 Pk del Abuelo
        //6 Pk del Papa
        return $this->hasManyThrough('App\Cancion',
                                    'App\Disco',
                                    'ArtistId',
                                    'AlbumId',
                                    'ArtistId',
                                    'AlbumId');
    }
}
