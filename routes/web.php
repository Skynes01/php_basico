<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
//callback: funcion sin nombre
//que hace parte de los parametros de la inovacion de otra
Route::get("variables", function(){
    $mensaje =10;
    var_dump($mensaje);
    echo"<hr />";
    $mensaje = "Pyke";
    var_dump($mensaje);
} );

Route::get("arreglos", function(){
//Arreglo
$estudiantes =[ "AN"=> "Sett","MA"=> "Volocho","JO"=>"Yasuo" ];
echo "<pre>";
print_r($estudiantes);
echo "<pre>";
});
