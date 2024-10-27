<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <!--Fonte Google-->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">
    <!--CSS Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--CSS da Aplicação-->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/styles.css">
    <!--<script src="/js/scripts.js"></script>-->
    <link rel="shortcut icon" href="{{ asset('img/tenebris.png') }}">

</head>
<header>


    <nav class="navbar navbar-expand-lg navbar-light p-0 y_border"id="navbar" >
    <div class = "container ">
    <a href="/" class="navbar-brand ">
                <img src="/img/logoordem.png" alt="IFSP" style ="text-align:center;">
    </a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> 
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!--<a href="/" class="navbar-brand">
                <img src="/img/logoext.png" alt="IFSP">
            </a>-->

            <UL class="navbar-nav" id="navbar-nav-left" >
                
            
                <li class="nav-item m-2 e">
                    <a href="/" class="navbar-link">Home</a>
                </li>

                <li class="nav-item m-2 "> <!--Projeto Integrador -->
                        <a href="/events/criarpersonagem" class="navbar-link">Criar Personagem</a>
                    </li>
                @auth
                <li class="nav-item m-2 "> <!--Projeto Integrador -->
                        <a href="/meuspersonagens" class="navbar-link">Meus Personagens</a>
                    </li>
                @endauth
                   
            </ul>

            <UL class="navbar-nav align-self-start" id="navbar-nav-right" >
                @guest
                <li class="nav-item m-2">
                    <a href="/login" class="navbar-link">Entrar</a>
                </li>
                <li class="pipe nav-item m-2" >
                    <a> | </a>
                </li>
               <!-- &nbsp;|&nbsp; -->
                <li class="nav-item m-2" >
                    <a href="/register" class="navbar-link">Cadastrar</a>
                </li>
                @endguest
              
                @auth
                <li class="nav-item m-2">
                    <form action="/logout" method="POST" >
                        @csrf
                        <a href="/logout" class="navbar-link"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            Sair
                        </a>
                    </form>
                </li>
                <li class = "nav-item m-2">
                <a href="/dashboard"><img src="/img/ProfileImg.webp" style="width:25px; border:1px solid black"></a>
                </li>
            @endauth
            </UL>
</div>
        </div>
    </nav>

</header>

<body>
    
    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @endif
                @yield('content')
            </div>
    </main>
    </body>
    <footer>
        <p>IFSP &copy; 2023</P>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>


</html>
