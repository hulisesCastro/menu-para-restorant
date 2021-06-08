<?php

namespace App\Http\Controllers;

use App\Models\bebidas;
use Illuminate\Http\Request;
use App\Models\desayuno;
use App\Models\registro;


class menuController extends Controller
{

public function store(Request $request){
  $desayuno = new desayuno();
  

  $desayuno->registros_id = registro::value('id');
  
    $desayuno->chilaquiles = $request->chilaquiles;
    $desayuno->huebos = $request->huebos;
    $desayuno->hotcakes = $request->hotcakes;
    $desayuno->tortas = $request->tortas;
    $desayuno->platos = $request->platos;
   $desayuno->save();
  return redirect()->route('menu.bebidas', $desayuno);

  }


  public function desayuno()
  { 
          return view('menu.desayuno');
         
        }
        public function comida()
        {
                return view('menu.comida');
              }
                    public function postres()
                    {
                            return view('menu.postres');
                          }
                          public function bebidas()
                          {
                          return view('menu.bebidas');
                          }
}