<div>
<nav class="navbar">

    <a class="navbar-brand" href="{{route("home")}}">
    <img src="/img/logo.webp" width="120" height="40" alt="" loading="lazy">
    </a>

    <ul class="nav">
       <li class="nav-item">
         <a class="nav-link active" href="@guest
           {{route("register")}}

         @endguest

        @auth
        {{route("article.create")}}
        @endauth
         
         ">INSERISCI ANNUNCI</a>
       </li>
       <li class="nav-item">
         <a class="nav-link active" href="#">PRODOTTI</a>
       </li>
       
    </ul>
 
    
      @guest
         <button class="btn-1" type=""><a href="{{route("login")}}">Login</a></button>   
         <button class="btn-2" type=""><a href="{{route("register")}}">Register</a></button>
      @endguest
       
      @auth
       <form action="{{route("logout")}}" method="POST">
         @csrf
         @method("POST")
         <button name="logout" class="btn-3" type="submit">Logout</button>
       </form>
      @endauth   
       
       

   

 </nav>
</div>