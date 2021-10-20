<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interedes</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
    <div id="app">
      @yield('content')
    </div>
    <style>
    .negro{
      background-color: #212121;
    }
    .cursor-pointer{
      cursor: pointer;
    }
    .gris-interedes{
      color: #7a7a7a;
    }
    .amarillo-header{
      color: #ffa600;
    }
    .fondo-amarillo{
      background-color: #ffa600;
    }
    .color-blanco{
      color: white;
    }
    .color-links{
      color: white;
    }
    .color-links:hover{
      color: #fcbb21;
    }
    .bg-header{
      background-color: #ffffff !important;
    }
    .negrita{
      font-weight: 500;
    }
    .letras-header{
      color: #7a7a7a !important;
    }
    .letras-header:hover{
      color: #fcbb21 !important;
    }
    .size-logo{
      width: 258px;
      height: 58px;
    }
    .style-card-inicio{
      margin-top: -30px;
      position: relative;
    }
    .style-borde{
      border: 1px solid rgba(0,0,0,.1);
    }
    .style-card-apps{
      margin-top: -60px;

    }
    @media only screen and (min-width: 1024px) {
      .size-logo{
        width: 258px;
        height: 58px;
      }
      .ocultar-desktop{
        display: none;
      }
      .foto-interedes-1{
        width: 511px;
        height: 349px;
      }
    }
    @media (max-width: 768px) {
      .foto-interedes-1{
        width: 511px;
        height: 349px;
      }
    }
    @media only screen and (max-width: 425px) {
      .size-logo{
        width: 100px;
        height: 35px;
      }
      .ocultar-telefono{
        display: none;
      }
      .ocultar-movil{
        display: none;
      }
      .foto-interedes-1{
        width: 211px;
        height: 149px;
      }
    }
    </style>
    <script src="{{ asset('js/app.js') }} "></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>
