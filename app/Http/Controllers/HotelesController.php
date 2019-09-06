<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hoteles;
//Route::get('hoteles/{id}', 'HotelesController@show');
//Route::get('hoteles/todos', 'HotelesController@show');
class HotelesController extends Controller
{
    public function show($id)
    {
        
        //
        //Solicitamos al modelo el hoteles con el id solicitado por GET.
        return hoteles::where('id', $id)->get();
    }

    
    public function index()
    {
        //
        //Solicitamos todo el contenido
        return hoteles::get();
    }
}
