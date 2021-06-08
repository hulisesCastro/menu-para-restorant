@extends('layouts.plantilla')

@section('title','registro')

@section('content')
<h1>"bienvenido pagina de registro"</h1>


<ul>
@foreach ($menus as $menu)

<li>
  <a href="{{route('registro.show', $menu->id)}}">{{$menu->nombre}}</a>
  <form action="{{route('registro.destroy', $menu)}}" method="POST">
    @csrf
    @method('delete')
<button type="submit">Eliminiar</button>
</form>
</li>
    
@endforeach
</ul>



   {{$menus->links()}}
 
@endsection

