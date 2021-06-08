@extends('layouts.plantilla')

@section('title','registro.edit')

@section('content')
<h1>BIENVENIDO Edita tu MESA</h1>

<form action="{{route('registro.update', $menu)}}" method="POST">

@method('put')
    @csrf

    <label>
        NOMBRE:   
         <br>
        <input type="text" name="nombre" value="{{old('nombre', $menu->nombre)}}">
        <br>
        @error('nombre')
        <small>{{$message}}</small>
        <br>
        <br>
    @enderror
    </label>
    <label>
        MESA:
        <br>
    
   <select number="numero" name="mesa">
       <option>{{$menu->mesa}}</option>
    <option value=""></option> 
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option>
</select>
@error('mesa')
   <small>{{$message}}</small>
   <br>
   <br>
@enderror
       <br>
    </label>
       <br>
       <label>
       COMENSALES:
       <br>
       <select number="numero" name="comensales">
           <option>{{$menu->comensales}}</option>
           <option value=""></option>
           <option value="1">1</option>
           <option value="2">2</option>
           <option value="3">3</option>
           <option value="4">4</option>
           <option value="5">5</option>
       </select>
       @error('comensales')
       <small>{{$message}}</small>
       <br>
       <br>
   @enderror
       <br>
       <br>
       <button type="submit">actualizar mesa</button>
    </label>
</form> 



@endsection

