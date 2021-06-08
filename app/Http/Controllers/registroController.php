<?php

namespace App\Http\Controllers;

use App\Models\registro;
use Illuminate\Http\Request;
use App\Http\Requests\storeRegistro;
use App\Models\desayuno;

class registroController extends Controller
{
    public function index(){
       
    
        $menus = registro::orderBy('id','desc')->paginate();

        return view('registro.index', compact('menus',));
    }
    public function create(){
        return view('registro.create');
    }
       
    public function store(storeRegistro $request ){
      
       /* $menu = new registro();
     $menu->nombre = $request->nombre;
     $menu->mesa = $request->mesa;
     $menu->comensales = $request->comensales;
     $menu->save();*/
     $menu = registro::create($request->all()); 
     return redirect()->route('registro.show', $menu);

    }

    public function  show(registro $menu){
        $desayuno = desayuno::all();
       
        return view('registro.show', compact('menu','desayuno'));

  
}

public function edit(registro $menu){
    
      return view('registro.edit', compact('menu'));
}

public function update(storeRegistro $request, registro $menu){
 
    $menu->update($request->all());

     return redirect()->route('registro.show', $menu);
}

public function destroy(registro $menu){

    $menu->delete();
    return redirect()->route('registro.index');
}


}