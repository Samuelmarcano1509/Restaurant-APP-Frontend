<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
    <link rel="shortcut icon" href="../public/img/icon.ico">
    <link rel="stylesheet" href="/NeoRestaurante/public/css/bootstrap.css">
    <script src="/NeoRestaurante/public/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/NeoRestaurante/vendors/sweetAlert2/sweetalert2.min.css">
    <link rel="stylesheet" href="/NeoRestaurante/vendors/animate.css/animate.min.css"> 
    <style>
        @font-face {
            font-family: montserrat;
            src: url(/NeoRestaurante/public/Fonts/Montserrat/static/Montserrat-Regular.ttf);
            }
        body{
        font-family: 'montserrat';
        background-image: url('/NeoRestaurante/public/img/OIG1.cggt.MuVdud2vmc.jpeg');
        background-size: 110%;
        background-position: center;
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
      #item-user{
        margin-left: 3%;
        padding-left: 5%;
      }

      #cont{
      margin-top: 20%;

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
            width: 77.5%;
            height: 2px;
            background-color: #301f14; /* Color de la línea */
        }

        .formulario {
          background-color: white;
          border: 2px solid black;
          padding: 20px;
          border-radius: 10px;
          text-align: center; /* Centrar el texto */
        }
        .form-select,
        .form-control
         {
          border-color: black; /* Borde negro para todos los campos */
          margin-left: 50px;
          margin-top: 80px;
          
    }
    .form{
          border: 1px solid black;
          margin-left: 50px;
          margin-top: 80px;
          border-radius: 5px;
    }
    
        .btn-reservar {
          margin-top: 80px;
          background-color: #301F14;
          border-color: #301F14;
          color:white;
    }
        .btn-reservar:hover {
          background-color: #301F14; 
          border-color: #301F14;
          color: white; 
}

        @media only screen and (max-width: 360px) and (max-height: 740px) {
            body {
                
                font-family: 'montserrat';
                background-image: url('/NeoRestaurante/public/img/OIG1.cggt.MuVdud2vmc.jpeg');
                background-size: 110%;
                background-position: center;
            }

            #navbarNav {
                padding-left: 28.5%;
                font-size: 95%;
            }

            #navbar {
                width: 100%;
            }

            #item {
                margin-left: 3%;
                padding-left: 5%;

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
                bottom: 0px;
                left: 0px;
                width: 30%;
                height: 2px;
                background-color: #301f14;
               
            }

            .formulario {
                flex-direction: column;
                align-items: center;
                background-color: white;
                text-align: center;
                /* Centrar el texto */
            }

             .mb-2.d-flex {
                flex-direction: column;
                align-items: flex-start; /* Alinea los elementos a la izquierda */
                margin-top: 10px; /* Agrega un espacio superior */
                
                }

            

            .form-select,
            .form-control {
                margin: 15px 0; 
                border-color: black;
                margin-left: 50px;
                

            }
            .form{
                margin: 15px 0; 
                border: 1px solid black;
                margin-left: 50px; 
                border-radius: 5px;
            }

            .btn-reservar {
                margin-top: 50px;
                background-color: #301F14;
                border-color: #301F14;
                color: white
            }


        }



    </style>
</head>
<body onload="userData(); reservationData();">
  <!--Barra de navegacion-->
  <div id="navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-white" >
      <div class="container-fluid" id="Nav-bar">
              <div class="navbar-brand d-flex"  style="align-items: center; cursor: pointer; margin-left: 3%;"  onclick="location.href='../'"  >
                <img src="/NeoRestaurante/public/img/neo-favicon-white.svg" alt="Logo" width="85" height="85" class="d-inline-block align-top">
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
                      <a class="nav-link active" href="#reservation" style="color: #301f14;">Reserva</a>
                  </li>
                  <li class="nav-item" id="item">
                      <a class="nav-link" href="./we">Nosotros</a>
                  </li>
                  <li class="nav-item" id="item">
                      <a class="nav-link" href="./contactus">Contacto</a>
                  </li>
                  <li class="nav-item" id="item-user"  style="white-space: nowrap;">
                    <a id="titleusers" class="nav-link" href="./Auth/login.php">Iniciar Sesión</a>
                </li>
               </ul>
              </div> 
      </div>
  </nav>
  </div>
<div class="container" style="margin-bottom: 30px;"> 
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 formulario">
            <h2 class="text-center mb-4">Reservar una Mesa</h2>
            <h5 class="text-center mb-3" style="padding-top:5%">Para reservar una mesa en Neo Restaurante</h5>
            <p class="text-center mb-3">seleccione una mesa, la fecha y la hora para su reservación.</p>
            <form>
                <div class="mb-2 d-flex">
                    <select class="form-select me-2 mb-2" name="mesas"  id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 15px; width: 200px;" >
                    </select>          
                    <div class="mb-2">
                    <input type="date" class="form-control me-2 mb2" name="fecha" id="fecha20" placeholder="fecha de reservacion" style="width: 200px;" min="<?php echo date('Y-m-d'); ?>">
                    </div>
                    <input type="time" id="hora" class="form me-2 mb-2" min="12:00 PM" max="11:00 PM" value="<?php date_default_timezone_set('America/Caracas'); echo date('H:i'); ?>" name="hora4" id="hora4" style="font-size: 15px; width: 200px;">    
                    
                </div>
                <input type="button" value="Realizar reservación" class="btn btn-reservar" id="btn-res" style="font-size: 20px;" onclick="createReservation();">
            </form>
        </div>
    </div>
</div>


</form>

  <!--  Footer -->
  <footer class="text-light pt-3 pb-2" style="background-color: #000000;">
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

<script src="/NeoRestaurante/vendors/sweetAlert2/popper.min.js"></script>
<script src="/NeoRestaurante/vendors/sweetAlert2/sweetalert2.all.min.js"></script>
<script src="../public/Scripts/auth.js"></script>
<script src="../public/Scripts/userReservation.js"></script>
<script src="/NeoRestaurante/public/js/bootstrap.bundle.js"></script>
</body>
</html>
