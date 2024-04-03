<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="shortcut icon" href="../public/img/icon.ico">
    <link rel="stylesheet" href="/NeoRestaurante/public/css/bootstrap.css">
    <script src="/NeoRestaurante/public/vendor/js/jquery.js"></script>
      <link rel="stylesheet" href="/NeoRestaurante/public/vendor/css/css.css">
      <script src="/NeoRestaurante/public/vendor/js/js.js"></script>
      <link rel="stylesheet" href="/NeoRestaurante/public/css/demo.css" />
      <link rel="stylesheet" href="/NeoRestaurante/vendors/sweetAlert2/sweetalert2.all.min.css">  
    <link rel="stylesheet" href="/NeoRestaurante/vendors/animate.css/animate.min.css">  
    <script src="https://www.paypal.com/sdk/js?client-id=AcQc7_I42C9Is5eCf-SuOGX0kNA1J5ODVTIc5I-eIGsTdqkqsHf41XHqxF2_M3V6NNnBVoxltzT5sAhJ&currency=USD"></script>
    



    
    <style>
        @font-face {
            font-family: montserrat;
            src: url(/NeoRestaurante/public/Fonts/Montserrat/static/Montserrat-Regular.ttf);
        }

        body {
            font-family: 'montserrat';
            background-color: rgb(217, 213, 213);
            background-size: 110%;
            background-position: top;
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
        #item-user{
        margin-left: 3%;
        padding-left: 5%;
      }

        #cont {
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
            width: 75%;
            height: 2px;
            background-color: #301f14; /* Color de la línea */
        }

        /* Estilos para la barra lateral */
    

        .list-group-item {
            background-color: #170E09;
            border-color: #170E09;
            color: white;
            border-radius: 0;
            text-align: center;
        }

        .list-group-item:hover {
            background-color: #301f14;
            color: white;
        }

        .dish-container {
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 60%; /* Ancho total de los platillos */
            height: 150px;
            margin: 10px 100px auto;
            background-color: #f9f9f9;
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 10px;
            position: relative; /* Posición relativa */
        }

        .dish-image {
            width: 120px;
            height: auto;
            border-radius: 5px;
            margin-right: 20px;
        }

        .dish-info {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .center-container {
            position: relative;
            top: -265px;
            right: 225px;
            text-align: start; /* Centrar el contenido */
        }

        .title {
            font-size: 24px;
            font-weight: bold;
            margin-top: 3%;
            margin-bottom: 3%;
            margin-left: 35%;
        }

        .order-container {
            position: fixed;
            top: 37%;
            right: 45px;
            padding: 10px;
            display: flex;
            flex-direction: column;
            background-color: #f9f9f9;
            height: auto;
            width: 25%;
            border-radius: 5px
        }

        .order-text {
            text-align: start;
            font-size: 20px;
            margin-top: 10px;
            
        }
        #paypal-button-container{
        width: 120px;
        margin-right: 75px
        
      }

        #order-button {
            margin-top: 100px;
            margin-bottom:20px;
            display: block;
            text-align: center;
            background-color: #301F14;
            color: white;
            border: none;
            cursor: pointer;
            margin-left: auto; /* Mover el botón al extremo derecho */
            margin-right: auto; /* Mover el botón al extremo derecho */
            height: 60px;
        }
        input[type="number"] {
        width: 100px;
        height: 40px;
        font-size: 16px;
        border: 1px solid #ccc;
        padding: 5px;
        }

        .button-container {
            display: flex;
            justify-content: center;
            text-align: center;
        }

        .order-container .dish-container {
            width: 80%;
            margin: 10px auto;
        }
        
        .order-dish-image{
            width: 80px; /* Ajusta el ancho de la imagen según lo necesites */
            height: auto; /* Para mantener la proporción */
        }

        .dish-description {
            position: absolute;
            bottom: 0;
            right: 0;
            padding: 5px;
            background-color: rgba(255, 255, 255, 0.7); /* Ajusta el fondo del precio */
            border-top-left-radius: 5px; /* Ajusta la esquina superior izquierda del fondo del precio */
        }

        .dish-description p {
            margin: 0;
        }

        .price {
            color: #333;
            font-weight: bold;
            font-size: 16px;
        }

        .quantity {
            position: absolute;
            top: 20px;
            left: -38px;
            background-color: rgba(255, 255, 255, 0.7); /* Ajusta el fondo del texto */
            padding: 5px;
            border-bottom-right-radius: 5px; /* Ajusta la esquina inferior derecha del fondo del texto */
        }

        .remove-item {
            position: absolute;
            top: 20px;
            right: -25px;
            cursor: pointer;
            font-size: 20px;
            margin: 0;
        }

        /* Estilos para el botón "Agregar" */
        .add-button {
            position: absolute;
            bottom: 10px;
            right: 10px;
            background-color: #301F14;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
         /* Media query para dispositivos Samsung (360x740) */
            @media only screen and (max-width: 360px) and (max-height: 740px) {
        .body {
            font-size: 8px; /* Ajusta el tamaño de la fuente */
        }  
        /* Estilos para la barra lateral en dispositivos Samsung */
        .sidebar {
            width: 30%; /* Ancho completo */
        }

        .list-group-item {
            font-size: 9px; /* Tamaño de fuente más pequeño */
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
            left: -10px;
            width: 30%;
            height: 2px;
            background-color: #301f14; /* Color de la línea */
        }   

        /* Estilos para la barra de navegación en dispositivos Samsung */
        .navbar-brand img {
            width: 60px; /* Ajusta el tamaño del logo */
            height: 60px;
        }

        .navbar-brand span {
            font-size: 14px; /* Ajusta el tamaño del texto */
        }
        

        .title {
            margin-left:35%;
            
        }
        .center-container {
            position: relative;
            top: -300px;
            left: 45%;
           
        }

        /* Estilos para los cuadros de platillos en dispositivos Samsung */
        .dish-container {
            width: 90%;  
            height: 20%; 
            margin: 10px auto;
            margin-left: 5%; 
        }

        .order-dish-image {
            width: 60px; /* Nuevo tamaño de la imagen */
            margin-right: 20px; /* Ajuste de margen (si es necesario) */
        }

        .dish-info h5 {
            font-size: 10px; /* Tamaño de fuente más pequeño */
        }

        .dish-info p,
        .dish-info span {
            font-size: 8px; /* Tamaño de fuente más pequeño */
        }

        /* Estilos para el cuadro de pedidos en dispositivos Samsung */
        .order-container {
             z-index: 9999;
            margin-top: 10%;
            margin-bottom: 10%;
            position:sticky;
            width: 90%;
            height: 25%;  
            top: 10%;
            left: 5%;
            right: 5%; /* Alineación hacia la derecha */
        }
  

        .order-text {
            font-size: 12px; /* Tamaño de fuente más pequeño */
        }

        .price {
            position: absolute;
            top: -5px;
            left: -25px;
            font-weight: bold;
            font-size: 8px;
        }

        .dish-description p {
            font-size: 8px;
            margin: 0;
        }

        .quantity {
            
            position: absolute;
            font-size: 8px;
            top: 15px;
            left: -30px;
            background-color: rgba(255, 255, 255, 0.7); /* Ajusta el fondo del texto */
            padding: 5px;
            border-bottom-right-radius: 5px; /* Ajusta la esquina inferior derecha del fondo del texto */
        }

        .order-container .dish-container {
            height: 30%; /* Reducción de la altura */
            margin: 10px auto; /* Margen superior e inferior de 10px y centrado horizontal */
            margin-left: 25px;
        }

        .remove-item {
            position: absolute;
            font-size: 12px;
            top: 15px;
            left: 160px;
        }

        .order-button {
            font-size: 8px; /* Tamaño de fuente del botón */
            display: block;
            width: 50%;
            margin-top: 5px; /* Reducción del margen superior */
        }

        .button-container {
            display: flex;
            justify-content: center; 
            text-align: center;
        }

        .add-button {
            font-size: 6px;
        }
    }
    </style>
</head>
<body onload="productList(); userData();">
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
                      <a class="nav-link active" aria-current="page" href="#menu" style="color:#301f14 ;" >Menú</a>
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

        <!--Barra Lateral-->

        <div class="center-container" id="cont">

        </div> 




    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><b>Carrito de compras</b></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!----><div class="card">
        <h5 class="card-header">Lista de productos pedidos</h5>
                <div class="table-responsive text-nowrap" style="margin-left: 5%; margin-right:5%;">
                  <table class="table" id="carrito" >
                    <thead>
                      <tr>
                        <th>Nombre del producto</th>
                        <th>cantidad</th>
                        <th>Precio</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" id="inf-body">
                    </tbody>
                    <tfoot>
                      <td></td>
                      <td id="cant-ord">Cantidad de productos</td>
                      <td id="total">Total a pagar</td>
                    </tfoot>
                  </table> 
                </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal" id="cerrar">Cerrar</button>
        <div id= 'paypal-button-container' style="margin-left: 20px;">
        <!--<button type="button" class="btn btn-primary" style="background-color: #301F14; color: white; border: none;">Realizar pago</button>-->
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!--modal-->
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><b>Advertencia</b></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>¿Esta seguro que desea eliminar este producto?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  data-bs-toggle="modal" data-bs-target="#staticBackdrop" onclick="ocultar2();">Cancelar</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="borrar" onclick="deleteproductcar();">Eliminar</button>
      </div>
    </div>
  </div>
</div>

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
<!--/modal-->
    <script src="/NeoRestaurante/public/js/bootstrap.min.js"></script>
    
    <script src="../public/Scripts/public_menu.js"></script>           
    <script src="/NeoRestaurante/public/vendor/js/bootstrap copy.js"></script>
    <script src="../public/Scripts/auth.js"></script>
    <script src="/NeoRestaurante/public/Scripts/reservationAdmin.js"></script>
    <script src="/NeoRestaurante/vendors/sweetAlert2/popper.min.js"></script>
    <script src="/NeoRestaurante/vendors/sweetAlert2/sweetalert2.all.min.js"></script>
    <script src= "../public/Scripts/paypalmenu-order.js"></script>
    
</body>
</html>