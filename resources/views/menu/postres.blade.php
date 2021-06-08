<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Postres</title>
</head>
<body>
    <div class="container mx-auto">
        <div class="grid grid-cols-2 lg:grid-cols-6 gap-12">
            <div><img src="{{asset('img/chocohuate.jpg')}}"><input type="checkbox"></div>
            <div><img src="{{asset('img/donas.jpg')}}" /><input type="checkbox"></div>
            <div><img src="{{asset('img/flan.jpg')}}" /><input type="checkbox"></div>
            <div><img src="{{asset('img/galletas.jpg')}}" /><input type="checkbox"></div>
            <div><img src="{{asset('img/helado.jpg')}}" /><input type="checkbox"></div>
            <div><img src="{{asset('img/pastel.jpg')}}" /><input type="checkbox"></div>
            <div><img src="{{asset('img/pay.jpg')}}" /><input type="checkbox"></div>
            <div><img src="{{asset('img/postre.jpg')}}" /><input type="checkbox"></div>
            <div><img src="{{asset('img/varios.jpg')}}" /><input type="checkbox"></div>
            <div><img src="{{asset('img/vasos.jpg')}}" /><input type="checkbox"></div>
            <div><img src="{{asset('img/depositphotos_38408239-stock-photo-assorted-desserts.jpg')}}" /><input type="checkbox"></div>
       </div>
       <button type="submit">Enviar pedido</button>  
</body>
</html>