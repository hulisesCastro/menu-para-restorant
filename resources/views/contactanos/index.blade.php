@extends('layouts.plantilla')

@section('title','contactanos')

@section('content')
<h1>"dejanos un mensaje"</h1>

<form action="{{route('contactanos.store')}}" method="POST">

@csrf

    <label>
        Nombre:
        <br>
        <input type="text" name="nombre">
    </label>
<br>
@error('nombre')
<p><strong>{{$message}}</strong></p>

@enderror
<label>
Correo:
<br>
<input type="text" name="correo">
</label>
<br>
@error('correo')
<p><strong>{{$message}}</strong></p>

@enderror
<label>
    Mensaje:
<br>
<textarea name="mensaje" rows="5"></textarea>
</label>
<br>
@error('mensaje')
<p><strong>{{$message}}</strong></p>

@enderror
<br>

<button type="submit">Enviar menasaje</button>
</form>

@if(session('info'))
<script>
    alert("{{session('info')}}");
</script>


@endif

@endsection