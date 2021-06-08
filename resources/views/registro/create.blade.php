{{--@extends('layouts.plantilla')--}}

@section('title','registro create')

@section('content')

@endsection
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>create</title>
    <h1 class="text-center text-3xl font-bold mb-3">"pagina para crear tu menu"</h1>
    <br>
    <br>
</head>
<body>
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-4">
            <div class="bg-yellow-300 row-span-6 shadow-2xl p-12"><a href="{{route('menu.desayuno')}}"><p class="text-center text-3xl font-bold mb-3">&#9824 desayuno &#9824</p></a></div>
            <div class="bg-yellow-400 row-span-6 shadow-2xl p-12"><a href="{{route('menu.comida')}}"><p class="text-center text-3xl font-bold mb-3">&#9827 comida o cena &#9827</p></a></div>
            <div class="bg-yellow-100 row-span-6 shadow-2xl p-12"><a href="{{route('menu.postres')}}"><p class="text-center text-3xl font-bold mb-3">postres &#8482</p></a></div>
            <div class="bg-blue-600 row-span-6 shadow-2xl p-12"><a href="{{route('menu.bebidas')}}"><p class="text-center text-3xl font-bold mb-3">bebidas</p></a></div>
        </div>
        


    </div>
    
</body>
</html>
