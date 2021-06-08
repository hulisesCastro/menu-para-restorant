<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--<link rel="stylesheet" href="{{asset('css/app.css')}}">--}} 
    <title>Comida-Cena</title>
   <style>
       .border{
           background-color:#F59E0B
       }
       .margin{
           background-color:#FBBF24
        }

   </style>
</head>
<body class="container mx-auto">
    <form action="" >
  
    <div class="border">
    <fieldset>
        <legend>entradas</legend>
        <input type="checkbox">consome
        <input type="checkbox">arroz
        <input type="checkbox">sopa aguada
        <input type="checkbox">espaguetti
        <input type="checkbox">sopa de verduras
        <input type="checkbox">sopa azteca
       <br>
        <br> platos:<select number="numero" name="platos"><option value="0"></option>
                                                          <option value="1">1</option>
                                                          <option value="2">2</option>
                                                          <option value="3">3</option>
                                                          <option value="4">4</option>
                                                          <option value="5">5</option>
                                                          </select>
        </fieldset>
    </div>
    <div class="margin">
       
            <fieldset>
                <legend>garnachas</legend>
                <input type="checkbox">quesadillas
                <input type="checkbox">gorditas
                <input type="checkbox">pambasos
                <input type="checkbox">tostadas
                <input type="checkbox">sopes
                <input type="checkbox">huaraches
               <br>
                <br> platos:<select number="numero" name="platos"><option value="0"></option>
                                                                  <option value="1">1</option>
                                                                  <option value="2">2</option>
                                                                  <option value="3">3</option>
                                                                  <option value="4">4</option>
                                                                  <option value="5">5</option>
                                                                  </select>
                </fieldset>
            </div>
            
            <div class="border">
                <fieldset>
                    <legend>Tacos</legend>
                    <input type="checkbox">dorados c/pollo
                    <input type="checkbox">dorados c/res
                    <input type="checkbox">al pastor
                    <input type="checkbox">campechanos
                    <input type="checkbox">suadero
                   <br>
                    <br> platos:<select number="numero" name="platos"><option value="0"></option>
                                                                      <option value="1">1</option>
                                                                      <option value="2">2</option>
                                                                      <option value="3">3</option>
                                                                      <option value="4">4</option>
                                                                      <option value="5">5</option>
                                                                      </select>
                    </fieldset>
                </div>
                <div class="margin">
                    <fieldset>
                        <legend>marinos</legend>
                        <input type="checkbox">camarones ala diabla
                        <input type="checkbox">mojarra al chipotle
                        <input type="checkbox">quesadillas de pescado
                        <input type="checkbox">ceviche
                        <input type="checkbox">coctel de camaron
                       <br>
                        <br> platos:<select number="numero" name="platos">
                                                                          <option value="0"></option>
                                                                          <option value="2">2</option>
                                                                          <option value="3">3</option>
                                                                          <option value="4">4</option>
                                                                          <option value="5">5</option>
                                                                          </select>
                                                                          
                        </fieldset>
                    </div>
                    <ul>
                        <li>
                            <button type="submit">Enviar pedido</button> <a href="{{route('menu.bebidas')}}">Elige tu bebida</a>
                        </li>
                    </ul>           
</body>
    
</html>