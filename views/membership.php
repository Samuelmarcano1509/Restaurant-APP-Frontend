<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obtener Membresía</title>
    <link rel="shortcut icon" href="../public/img/icon.ico">
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
        
        #Navbar {
        width: 100%; 
        margin: 0; 
        padding: 0; 
        position: sticky;
        top: 0;
        left: 0;
        z-index: 100;
        background-color: #fff; 
        }

      
        #navbarNav{
        padding-left: 28.5%;
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
     
      
      
      }
    
    </style> 
</head>
<body>
  <!--Barra de navegacion-->
  <div id="Navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-white" >
      <div class="container-fluid" id="Nav-bar">
              <div class="navbar-brand d-flex"  style="align-items: center; margin-left: 3%; cursor:pointer" onclick="location.href='../index'"  >
                <img src="../public/img/neo-favicon-white.svg" alt="Logo" width="85" height="85" class="d-inline-block align-top">
                <span class="ms-2 fs-6 fw-bold text-uppercase">Neo Restaurant</span>
              </div>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                  <li class="nav-item" id="item">
                      <a class="nav-link" aria-current="page" href="./menu" >Menú</a>
                  </li>
                  <li class="nav-item" id="item">
                      <a class="nav-link" href="./reservation">Reserva</a>
                  </li>
                  <li class="nav-item" id="item">
                      <a class="nav-link" href="./we">Nosotros</a>
                  </li>
                  <li class="nav-item" id="item">
                      <a class="nav-link" href="./contactus">Contacto</a>
                  </li>
                  <li class="nav-item" id="item"  style="white-space: nowrap;">
                    <a id="titleusers" class="nav-link" href="./Auth/login">Iniciar Sesión</a>
                </li>
                </ul>
              </div> 
      </div>
  </nav>
  </div>

      <!-- Proximamente -->
    <form class="container col-md-9" id="formulario" style= "margin-top:20%";>
    <div class="row justify-content-center">
      <div class="col-md-10 mx-auto row-8" id="cont"> 
            <div class="card bg-light rounded-3 card-body shadow-lg p-3 bg-body rounded" style="border-color: #dedede;" id="Contenedor">
            <h1 class="text-center mb-8" style="font-size:500%"> ¡PROXIMAMENTE! </h1>
            </div>
      </div>
    </div>
    
</form>
<script src="/NeoRestaurante/public/Scripts/auth.js"></script>
</body>
</html>