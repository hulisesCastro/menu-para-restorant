@extends('layouts.plantilla')

@section('title','home')

@section('content')
<h1>"bienvenido al restorant"</h1>

<form action="{{route('registro.store')}}" method="POST">

    @csrf

    <label>
        NOMBRE:   
         <br>
        <input type="text" name="nombre" value="{{old('nombre')}}">
        <br>
        @error('nombre')
        <small>{{$message}}</small>
        <br>
        <br>
    @enderror
    </label>
    <label>
        <br>
        MESA:
        <br>
    
   <select number="numero" name="mesa">
    <option>{{old('comensales')}}</option>   
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
    </label>
    <br>
    <label>
        <br>
       COMENSALES:
       <br>
       <select number="numero" name="comensales">
        <option>{{old('comensales')}}</option>
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
</label>
       <br>
       <br>
       <button type="submit">VER MESA</button>
    
</form> 
@endsection

