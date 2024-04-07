<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obtener Membresía</title>
    <link rel="shortcut icon" href="../public/img/icon.ico">
    <link rel="stylesheet" href="/NeoRestaurante/public/css/bootstrap.css">
    <link rel="stylesheet" href="/NeoRestaurante/vendors/sweetAlert2/sweetalert2.min.css">
    <link rel="stylesheet" href="/NeoRestaurante/vendors/animate.css/animate.min.css"> 
    <script src="https://www.paypal.com/sdk/js?client-id=AcQc7_I42C9Is5eCf-SuOGX0kNA1J5ODVTIc5I-eIGsTdqkqsHf41XHqxF2_M3V6NNnBVoxltzT5sAhJ&currency=USD"></script>
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
            padding-left: 35%;
        font-size: 95%;
        
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
      
      #item{
        margin-left: 3%;
        padding-left: 5%;
        
      }
      #item-user{
        margin-left: 3%;
        padding-left: 5%;
      }

      #cont{
     
      
      
      }
      .separator {
        font-weight: bold;
        border-left: 2px solid black;
        height: 5.5rem; /* Ajusta la altura de la barra según sea necesario */
        margin-top: 0.5rem; /* Ajusta el margen superior según sea necesario */
        margin-bottom: 0.5rem; /* Ajusta el margen inferior según sea necesario */
      }

            /* Estilos del botón */
      .btn-paypal {
          background-color: #301f14;
          color: #fff;
          border: none;
          padding: 10px 20px;
          border-radius: 5px;
          margin-top: 20px;
          cursor: pointer;
          transition: background-color 0.3s ease;
          width: 180px;
      }
      #paypal-button-container{
        width: 210px;
        margin-left: 365px;
      }

      /* Estilos del hover del botón */
      .btn-pagar:hover {
          background-color: #4a3529;
      }


         @media (max-width: 360px) and (max-height: 740px) {

    body {
        font-family: 'montserrat';
        background-position: center;
    }
            


            #item {
                margin-left: 3%;
                padding-left: 5%;

            }
              

            

        .mb-8, .mb-4, .mb-0, .mt-4 {
            margin-bottom: 15px !important;
            margin-top: 15px !important; /* Agregado margen superior */
        }
        #formulario {
            margin-top: 50px !important;
        }
        #Contenedor {
            padding: 10px !important;
        }
        .separator {
            height: 3.5rem !important;
            margin-top: 0.3rem !important;
            margin-bottom: 0.3rem !important;
        }
        .btn-pagar {
            margin-top: 10px !important;
        }
        .mb-4 {
            margin: 15px auto !important; /* Agregado margen superior e inferior */
            padding: 0 5px !important;
            font-size: 85% !important;
        }
        /* Textos separados por líneas verticales */
        .mb-0 {
            margin-left: 10px !important; /* Margen izquierdo ajustado */
            margin-right: 5px !important; /* Margen derecho reducido */
        }
        .mx-2 {

            padding-left: 5px;
            margin-left: 5px !important; /* Margen izquierdo reducido */
            margin-right: 5px !important; /* Margen derecho reducido */
        }
        
        .ml-2:last-child {
            margin-left: 8px !important;
            padding-right: 5px !important; /* Ajuste en el margen derecho del último elemento */
        }
    }


    
    </style> 
</head>
<body onload="userData();">
  <!--Barra de navegacion-->
  <div id="Navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-white" >
      <div class="container-fluid" id="Nav-bar">
              <div class="navbar-brand d-flex"  style="align-items: center; margin-left: 3%; cursor:pointer" onclick="location.href='../'"  >
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
                  <li class="nav-item" id="item-user"  style="white-space: nowrap;">
                    <a id="titleusers" class="nav-link" href="./Auth/login.php">Iniciar Sesión</a>
                </li>
                </ul>
              </div> 
      </div>
  </nav>
  </div>

            <!-- Proximamente -->
<form class="container col-md-8" id="formulario" style="margin-top: 170px; margin-bottom: 140px;">
    <div class="card bg-light rounded-1 card-body shadow-lg p-3 bg-body rounded text-center" style="border-color: #dedede; padding: 20px;" id="Contenedor">
        <div style="border: 2px solid black; padding: 20px; padding-left: 30px;">
            <p class="mb-4" style="font-size: 100%;"><b>Neo Restaurante </b></p>
            <h2 class="mb-4" style="font-size: 200%;"><b>Membresía</b></h2> 
            <p class="mb-4" style="margin: 50px 150px; font-size: 90%;">Disfruta de los beneficios otorgados al volverte un miembro de Neo Restaurante al pagar $44.99 una unica vez.</p> 

            <!-- Textos separados por líneas verticales -->
            <div class="d-flex align-items-center justify-content-center">
                <p class="mb-0 mr-2" style="margin: 0px 30px; font-size: 70%;">Acceso a la zona de miembros del restaurante</p> <!-- Se redujo el tamaño de fuente -->
                <span class="separator mx-2"></span>
                <p class="mb-0 mx-2" style="margin: 0px 40px; font-size: 70%;">Ser parte de nuestra celebración anual en aniversario del restaurante</p> <!-- Se redujo el tamaño de fuente -->
                <span class="separator mx-2"></span>
                <p class="mb-0 ml-2" style="margin: 5px ; font-size: 70%;">Acceso al menú degustación de toda la carta solo para miembros</p> <!-- Se redujo el tamaño de fuente -->
            </div>

            <!-- Botón "Pagar ahora" -->
            <div class="text-center mt-4" id="prueba">
                <input type="button" value="Iniciar sesión" id="button" class="btn-paypal" onclick="window.location.href='./Auth/login.php'">
                <p  id="info" style= "font-size: 15px; color: #301f14; margin-top: 5px; ">Inicie sesion para poder comprar una membresia</p>
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
<script src="../public/Scripts/paypal-membership.js"></script>
<script src="/NeoRestaurante/public/js/bootstrap.min.js"></script>
<script src="../public/Scripts/auth.js"></script>
<script src="/NeoRestaurante/public/js/bootstrap.bundle.js"></script>
</body>
</html>