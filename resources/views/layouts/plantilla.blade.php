<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <!--favicon-->

  <!--estilos-->
  <link href="{{ asset('css/gestion.css') }}" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

   <!-- Fonts -->
    
   <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet"> 
   <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  
</head>
<body>

  
  <h1 class="site-heading text-center text-white d-none d-lg-block">
      
    <span class="site-heading-lower">Maya cable tv</span>
  </h1>

 
  <!-- Navbar -->
 <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
  <div class="container">
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="{% url 'Home' %}">Maya cable tv</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item {{request()->routeIs('Home') ? 'active' : ''}} px-lg-4">
                <a class="nav-link text-uppercase text-expanded" href="{{route('Home') }}">Home</a>
            </li>

            <li class="nav-item {{request()->routeIs('paquetes.*') ? 'active' : ''}} px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="{{route('paquetes.index') }}">Paquetes</a>
            </li>

            <li class="nav-item {{request()->routeIs('promociones.*') ? 'active' : ''}} px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="{{route('promociones.index') }}">Promociones</a>
            </li>
      

        </ul>
    </div>
  </div>
</nav>

  @yield('content')

  <!--footer-->

  <footer class="footer text-faded text-center py-5">
    <div class="container">
      <p class="m-0">
        <a href="#" class="link">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
          </span>
        </a>
        <a href="#" class="link">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
          </span>
        </a>
        <a href="#" class="link">
          <span class="fa-stack fa-lg">
            <i class="fa fa-circle fa-stack-2x"></i>
            <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
          </span>
        </a>
    </p>
      <p class="m-0 mbt">
        <a href="sample.html" class="link">Política de privacidad</a> ·
        <a href="sample.html" class="link">Aviso legal</a> ·
        <a href="sample.html" class="link">Cookies</a>
  </p>
      <p class="m-0 mbt1">&copy; Maya Cable TV 2021</p>
    </div>
</footer>

  <!--scripts-->  
  <!-- Bootstrap -->
  <script src="{!! asset('vendor/jquery/jquery.min.js') !!}" async></script>
 
  <script src="{!!  asset('vendor/bootstrap/js/bootstrap.bundle.min.js') !!}" async></script>
  

</body>
</html>




