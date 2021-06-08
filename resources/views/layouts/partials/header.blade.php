<header>
    <h1>restorant</h1>
     <nav>
         <ul>
             <li><a href="{{route("home")}}" class="{{request()->routeIs('home') ? 'active' : ''}}">registro</a></li>
            
             <li><a href="{{route("contactanos.index")}}" class="{{request()->routeIs('contactanos.*') ? 'active' : ''}}">Desea contactarnos</a></li>
         </ul>
     </nav>
</header>