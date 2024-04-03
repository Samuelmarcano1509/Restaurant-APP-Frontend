<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="shortcut icon" href="../../public/img/icon.ico">
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
        padding-left: 28.5%;
        font-size: 95%;
        
      }
      #navbar{
        width: 100%;
        position: sticky;
        top: 0;
        left: 0;
        z-index: 100;
      }
      
      #item{
        margin-left: 3%;
        padding-left: 5%;
        
      }

      #cont{
      margin-top: 20%;
      
      
      }
      .modal-body{
             justify-content: center;
             align-items: center; 
             display: flex;
         }
        .nav-link.active {
            font-weight: bold;
            background-color: transparent; 
            position: relative;
        }

        .nav-link.active::after {
            content: '';
            display: block;
            position: absolute;
            bottom: -5px;
            left: 8.5px;
            width: 86%;
            height: 2px;
            background-color: #301f14; /* Color de la línea */
        }
        #prueba1{
          font-size: 135%;
          
        }
    
         @media only screen and (max-width: 360px) and (max-height: 740px) {
          body {
            background-size: auto; /* Cambiar el tamaño del fondo para adaptarse mejor a dispositivos más pequeños */
          }

          #navbarNav {
            
            font-size: 85%; /* Reducir el tamaño de fuente para adaptarse mejor a dispositivos más pequeños */
          }

          #item {
            margin-left: 0; /* Ajustar el margen para adaptarse mejor a dispositivos más pequeños */
            padding-left: 0; /* Ajustar el padding para adaptarse mejor a dispositivos más pequeños */
          }

          #formulario {
            margin-bottom: 20%; /* Ajustar el margen inferior para adaptarse mejor a dispositivos más pequeños */
          }

          .modal-body {
            justify-content: center;
            align-items: center;
            display: flex;
          }

          .nav-link.active::after {
            content: '';
            display: block;
            position: absolute;
            bottom: 0px;
            left: 0px;
            width: 40%;
            height: 2px;
            background-color: #301f14; /* Color de la línea */
          }

          #prueba1 {
            font-size: 125%;

          }
   
          
        .form-group.col-md-8 {  
          width:70%;
        }
        

        .form-group.col-md-9 {
          margin-right: 30px; 
        }

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
                      <a class="nav-link" aria-current="page" href="../menu" >Menú</a>
                    </li>
                    <li class="nav-item" id="item">
                      <a class="nav-link" href="../reservation">Reserva</a>
                    </li>
                    <li class="nav-item" id="item">
                      <a class="nav-link" href="../we">Nosotros</a>
                    </li>
                    <li class="nav-item" id="item">
                      <a class="nav-link" href="../contactus">Contacto</a>
                    </li>
                    <li class="nav-item" id="item"  style="white-space: nowrap;">
                    <a class="nav-link active" id="boton" href="#login" style="color: #301f14;" ><b>Iniciar Sesión</b></a>
                    </li>
                </ul>
                </div> 
      </div>
  </nav>
  </div>

 <!--Contenedor para el login-->
  <form class="container col-md-6" id="formulario" style="margin-bottom: 70px;">
    <div class="row justify-content-center" id="prueba1">
        <div class="col-md-9 mx-auto  row-8" id="cont" > 
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
                        <button type="button" onclick="login()" class="btn btn-lg"data-bs-toggle="modal" data-bs-target="#modal_msg" style="background-color:#301f14; width: 87.5%; border-radius: 6px; color:white; font-size: 80%;"><b>Iniciar Sesión</b></button>
                    </div>
                <div class="my-3">
                    <div class="text-center">
                        <p class="link-text" onclick="location.href='./register'" style="cursor: pointer; font-size: 60%; ">Crear una cuenta nueva</p>
                        <p class="link-text" onclick="location.href='../../index'" style="cursor: pointer; font-size: 60%;">Volver al inicio</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</form>
<!-- Modal -->
<div class="modal fade" id="modal_msg" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Información</h1>
        <button id="button-close" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
          <div id="spinner-hide" class="spinner-hide">
              <div id="spinner" class="spinner-border" role="status">
              </div>
          </div>
          <p id="response"></p>
      </div>
      <div class="modal-footer">
        <button id='redirect'type="button" class="btn btn-secondary" data-bs-dismiss=modal>Cerrar</button>
      </div>
    </div>
  </div>
</div>

  <!--  Footer -->
  <div>
  <footer class="text-light pt-3 pb-2" style="background-color: #000000; ">
    <div class="container text-center text-md-start" style="background-color: #000000;">
      <div class="text-center mb-2" style="background-color: #000000;">
        <p style="margin-bottom: 2px;">
        © 2024 Neo Restaurante - Todos los derechos reservados
        </p>
        <p style="margin-bottom: 2px;">Nueva Esparta, Pampatar 6316 Calle Nueva Cadiz</p>
      </div>
      <div class="text-center">
        <ul class="list-unstyled list-inline">
          <li class="list-inline-item">
          <img src="/NeoRestaurante/public/img/instagram-w.svg" alt="Imagen1" style="cursor: pointer;width: 25px; height: 25px;" onclick="location.href='../'" >
          </li>
          <li class="list-inline-item">
          <img src="/NeoRestaurante/public/img/facebook-w.svg" alt="Imagen1" style="cursor: pointer;width: 25px; height: 25px;" onclick="location.href='../'" >
          </li>
        </ul>
      </div>
    </div>
</footer>
  </div>
  

<script src="/NeoRestaurante/public/Scripts/validation.js"></script>
<script src="/NeoRestaurante/public/Scripts/auth.js"></script>


</body>
</html>