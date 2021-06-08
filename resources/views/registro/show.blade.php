@extends('layouts.plantilla')

@section('title','registro' . $menu->id)

@section('content')
<h1>"BIENVENIDO Sr: {{$menu->nombre}}</h1>

<p><strong>mesa:</strong>{{$menu->mesa}}</p>
<p><strong>comensales:</strong>{{$menu->comensales}}</p>
<ul>
    @foreach ($desayuno as $desayuno)
    <li>{{$desayuno}}</li>
        
    @endforeach
  </ul>

<a href="{{route('registro.edit', $menu)}}">editar mesa</a>
<br>
<a href="{{route('registro.create', $menu)}}">ir al menu</a> 
<br>

@endsection
