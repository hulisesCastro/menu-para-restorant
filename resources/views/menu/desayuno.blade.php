
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--<link rel="stylesheet" href="{{asset('css/app.css')}}">--}} 
    <title>Desayuno</title>
   <style>
    
   </style>
</head>
<body>
    <form action="{{route('menu.store')}}" method="POST">

        @csrf
    
        </select>
        <div>
    <fieldset>
        <legend name="chilaquiles">chilaquiles</legend>
        <input type="checkbox">rojos
        <input type="checkbox">verdes
        <input type="checkbox">con queso
        <input type="checkbox">con crema
        <input type="checkbox">con pollo
        <input type="checkbox">con carne
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
    <div>
       
            <fieldset>
                <legend name="huebos">huebos</legend>
                <input type="checkbox">con salsa
                <input type="checkbox">con jamon
                <input type="checkbox">con chorizo
                <input type="checkbox">con tocino
                <input type="checkbox">con arroz
                <input type="checkbox">estrellados
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
            
            <div>
                <fieldset>
                    <legend name="hotcakes">hotkakes</legend>
                    <input type="checkbox">con miel
                    <input type="checkbox">con mantequilla
                    <input type="checkbox">con mermelada
                    <input type="checkbox">con tocino
                    <input type="checkbox">con crema/many
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
                <div>
                    <fieldset>
                        <legend name="tortas">tortas</legend>
                        <input type="checkbox">jamon
                        <input type="checkbox">pierna
                        <input type="checkbox">milanesa
                        <input type="checkbox">quesilllo
                        <input type="checkbox">salchicha
                       <br>
                        <br> platos:<select number="numero" name="platos">
                                                                          <option value="0"></option>
                                                                          <option value="1">1</option>
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