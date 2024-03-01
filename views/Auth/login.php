<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="/NeoRestaurante/public/css/bootstrap.css">
    <script src="/NeoRestaurante/public/js/bootstrap.min.js"></script>
    <style>
        @font-face {
            font-family: montserrat;
            src: url(/NeoRestaurante/public/Fonts/Montserrat/static/Montserrat-Regular.ttf);
            }
        body{
        font-family: 'montserrat';
        background-image: url('/NeoRestaurante/public/img/fondito-raro.svg');
        background-size: 110%;
        background-position: top;
      }
      
        #navbarNav{
          padding-left: 24%;
        font-size: 95%;
        
      }
      #navbar{
        width: 100%;
      }
      
      #item{
        margin-left: 3%;
        padding-left: 5%;
        
      }

      #cont{
      margin-top: 20%;
      }

      .nav-link.active{
        font-weight: bold;
        opacity: 60%;
        background-color: #301f14;
        background-position: center;
        border-radius: 12%;
      }
    
    </style> 
</head>
<body>
  <!--Barra de navegacion-->
  <div id="navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-white" >
      <div class="container-fluid" id="Nav-bar">
              <div class="navbar-brand d-flex"  style="align-items: center; cursor: pointer; margin-left: 3%;"  onclick="location.href='../../'"  >
                <img src="/NeoRestaurante/public/img/neo-favicon-white.svg" alt="Logo" width="85" height="85" class="d-inline-block align-top">
                <span class="ms-2 fs-6 fw-bold text-uppercase">Neo Restaurant</span>
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                    <li class="nav-item" id="item">
                      <a class="nav-link" aria-current="page" href="../menu" >Menu</a>
                    </li>
                    <li class="nav-item" id="item">
                      <a class="nav-link" href="../localization">Localización</a>
                    </li>
                    <li class="nav-item" id="item">
                      <a class="nav-link" href="../we">Nosotros</a>
                    </li>
                    <li class="nav-item" id="item">
                      <a class="nav-link" href="../contactus">Contacto</a>
                    </li>
                    <li class="nav-item" id="item"  style="white-space: nowrap;">
                    <a class="nav-link active" href="#login" style="color: white;"><b>Iniciar Sesión</b></a>
                    </li>
                </ul>
                </div> 
      </div>
  </nav>
  </div>

 <!--Contenedor para el login-->
  <form class="container col-md-6" id="formulario" >
    <div class="row justify-content-center">
        <div class="col-md-9 mx-auto row-8" id="cont"> 
            <div class="card bg-light rounded-3 card-body  shadow-lg p-3 bg-body rounded" style="border-color: #dedede;" id="Contenedor">
            <h1 class="text-center mb-4" style="font-size: 210%;"><b>¡BIENVENIDO!</b></h1>
            <div id="campos">
                    <div class="form-group col-md-8" style="margin-left: 16.5%;">
                        <label for="nombre">Usuario:</label>
                        <input type="text" class="form-control" name="usuario"  placeholder="Ingrese su nombre de usuario"style="font-size: 80%;">
                    </div>
                    <div class="form-group col-md-8"  style="margin-left: 16.5%;">
                        <label for="contraseña">Contraseña:</label>
                        <input type="password" class="form-control" name="contraseña" placeholder="Ingrese su contraseña" style="font-size: 80%;">
                    </div>
                    <br>
                    <div class="form-group col-md-9 d-flex justify-content-center" style="margin-left: 12.5%;">
                        <button type="button" onclick="login()" class="btn btn-lg" style="background-color:#301f14; width: 87.5%; border-radius: 0; color:white; font-size: 80%;"><b>Iniciar Sesión</b></button>
                    </div>
                <div class="my-3">
                    <div class="text-center">
                        <p class="link-text" onclick="location.href='./register'" style="cursor: pointer; font-size: 60%;">Crear una cuenta nueva</p>
                        <p class="link-text" onclick="location.href='../../index'" style="cursor: pointer; font-size: 60%;">Volver al inicio</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>
<script src="/NeoRestaurante/public/Scripts/auth.js"></script>
</body>
</html>