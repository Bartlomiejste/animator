<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">

    <title>@yield('title', 'Step by Fun')</title>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>

    <style>
        body {
            background: linear-gradient(to bottom, #96aee0, #b3bfd5, #d6aac7, #efc5d4);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            padding-top: 150px;
        }

        #heroSlider img {
            height: 500px;
            width: 100%;
            object-fit: cover;
            object-position: center center%;
        }


        .carousel-caption h3 {
            font-size: 2rem;
            font-weight: bold;
            color: #fff;
        }

        .carousel-caption p {
            font-size: 1.1rem;
            color: #fff;
        }


        .nav-link {
            font-weight: 500;
            margin-left: 15px;
            transition: color 0.2s ease-in-out;
            color: #fff;
        }

        .nav-link:hover {
            color: #000;
        }

        .menu-header a.nav-link {
          display: inline-block;
          margin-left: 20px;
          font-size: 20px;
      }

      .menu-header {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 999;
    transition: all 0.3s ease-in-out;
    background-color: rgba(255, 255, 255, 0.1);
    backdrop-filter: blur(10px); 
    -webkit-backdrop-filter: blur(10px);

      }





    </style>

</head>

<body>

  <header class="menu-header">
    <div class="container d-flex justify-content-between align-items-center transition-all">
      <a class="navbar-brand" href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" style="max-height: 150px;">
      </a>
  
      <div>
        <a class="nav-link" href="{{ route('home') }}">Strona główna</a>
        <a class="nav-link" href="{{ route('about') }}">O mnie</a>
        <a class="nav-link" href="{{ route('offer') }}">Oferta</a>
        <a class="nav-link" href="{{ route('gallery') }}">Galeria</a>
        <a class="nav-link" href="{{ route('contact') }}">Kontakt</a>
      </div>
    </div>
  </header>
  




  <div class="container-fluid p-0">
        @yield('content')
    </div>    

</body>

</html>
