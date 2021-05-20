<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetabuscadorController extends Controller
{
    //Accion para buscar el formulario de busqueda
    public function formulario_buscador(){
        //Mostrar vista Metabuscador
        return view('metabuscador');
    }

    //Accion para realizar la busqueda
    public function Buscar(){
        //Datos LLegan al arreglo  $_POST
        $termino = $_POST['termino'];
        $motor = $_POST['motores'];
        //Redireccionar al motor correcto, junto al termino
        //querystring
        switch($motor){
            case 1: return redirect()->to("https://www.google.com/search?q=$termino");
                break;
            case 2: return redirect()->to("https://www.bing.com/search?q=$termino");
                break;
            case 3: return redirect()->to("https://www.youtube.com/results?search_query=$termino");
                break;
            case 4: return redirect()->to("https://yandex.com/search/?text=$termino");
                break;
            case 5: return redirect()->to("https://www.ecosia.org/search?q=$termino");
                break;
            case 6: return redirect()->to("https://duckduckgo.com/?q=$termino");
                break;
            case 7: return redirect()->to("https://play.google.com/store/search?q=$termino");
                break;
            case 8: return redirect()->to("https://search.lilo.org/?q=$termino");
                break;
            case 9: return redirect()->to("https://espanol.search.yahoo.com/search?p=$termino");
                break;
            case 10: return redirect()->to("https://www.ask.com/web?q=$termino");
                break;
        }

    }
}
