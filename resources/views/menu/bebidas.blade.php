<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">                                                                                                                                                     
    <title>Bebidas</title>
</head>
<body>
    
    <div class="container mx-auto">
        <div class="grid grid-cols-2 lg:grid-cols-6 gap-12">
            <div><img src="{{asset('img/arizona.jpg')}}"><input type="checkbox"></div>
            <div><img src="{{asset('img/bohemia.jpg')}}" /><input type="checkbox"></div>
            <div><img src="{{asset('img/cafe.jpg')}}" /><input type="checkbox"></div>
            <div><img src="{{asset('img/coke.jpg')}}" /><input type="checkbox"></div>
            <div><img src="{{asset('img/fanta.jpg')}}" /><input type="checkbox"></div>
            <div><img src="{{asset('img/fresca.jpg')}}" /><input type="checkbox"></div>
            <div><img src="{{asset('img/jugo2.jpg')}}" /><input type="checkbox"></div>
            <div><img src="{{asset('img/recet-jugo-verde-con-kiwi.jpg')}}" /><input type="checkbox"></div>
            <div><img src="{{asset('img/sangria.jpg')}}" /><input type="checkbox"></div>
            <div><img src="{{asset('img/sprite.jpg')}}" /><input type="checkbox"></div>
            <div><img src="{{asset('img/te.jpg')}}" /><input type="checkbox"></div>
            <div><img src="{{asset('img/jjugo1.jpg')}}" /><input type="checkbox"></div>
       </div>
       <ul>
        <li>
            <button type="submit">Enviar pedido</button> <a href="{{route('menu.postres')}}">Elige tu postre</a>
        </li>
    </ul> 
</body>
</html>