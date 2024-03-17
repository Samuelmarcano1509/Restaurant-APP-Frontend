<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="shortcut icon" href="../public/img/icon.ico">
    <link rel="stylesheet" href="/NeoRestaurante/public/css/bootstrap.css">
    
    <style>
        @font-face {
            font-family: montserrat;
            src: url(/NeoRestaurante/public/Fonts/Montserrat/static/Montserrat-Regular.ttf);
            }
        body{
        font-family: 'montserrat';
        background-color: rgb(217, 213, 213);
        background-size: 110%;
        background-position: top;
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
        .sidebar {
            background-color: #170E09;
            color: white;
            padding-top: 20px;
            width: 250px;
            height: 100vh;
            position: sticky;
            top: 0; /* Fija la barra lateral en la parte superior */
        }

        /* Estilos para los elementos de la barra lateral */
        .sidebar-heading {
            padding: 10px;
            font-size: 20px;
            text-align: center;
        }

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
        width: 600px;
        height: 150px;
        margin: 10px auto;
        background-color: #f9f9f9;
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 10px;
        position: relative; /* Posición relativa */
        
        }
        .dish-image {
            width: 100px; 
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
            position: absolute;
            top: 80%;
            left: 45%;
            transform: translate(-50%, -50%);
        }


        .title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        /* Estilos para el contenedor del cuadro de pedidos */
        .order-container {
            position: fixed;
            top: 160px;
            right: 90px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            width: 350px; /* Ancho del cuadro */
            height: 300px; /* Reducir el alto del cuadro */
            display: flex;
            flex-direction: column;
           
        }

        
        .order-text {
            text-align: center;
            font-size: 16px;
            margin-bottom: 5px;
            margin-top: 5px;
        }

        
        .order-button {
            display: block;
            width: 50%;
            margin-top: 65px;
            padding: 8px 0;
            text-align: center;
            background-color: #301F14;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
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
            margin-left:135px;
            
        }
        .center-container {
            position: relative;
            top: -300px;
            left: 45%;
           
        }

        /* Estilos para los cuadros de platillos en dispositivos Samsung */
        .dish-container {
            width: 240px; /* Ancho del 90% */  
            height: 20%; /* Reducción de la altura */
            margin: 10px auto; /* Margen superior e inferior de 10px y centrado horizontal */
            margin-left: 37%; /* Mover a la derecha */
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
            position:relative;
            top: -1150px;
            left: 35%;
            height: 25%;
            width: 60%; /* Ancho del 90% */
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
<body>
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
                  <li class="nav-item" id="item"  style="white-space: nowrap;">
                    <a class="nav-link" href="./Auth/login">Iniciar Sesión</a>
                </li>
               </ul>
              </div> 
      </div>
  </nav>
  </div>

        <!--Barra Lateral-->
        <div class="col-md-3 col-12 sidebar" >
        <h2 class="sidebar-heading"><b>Menú</b></h2>
        <ul class="list-group">
          <li class="list-group-item">Platos Principales</li>
          <li class="list-group-item">Especialidades de la casa</li>
          <li class="list-group-item">Selección de Carnes</li>
          <li class="list-group-item">Delicias del Mar</li>
          <li class="list-group-item">Selección de Mariscos</li>
          <li class="list-group-item">Platos Vegetarianos</li>
          <li class="list-group-item">Aperitivos</li>
          <li class="list-group-item">Acompañamientos</li>
          <li class="list-group-item">Postres</li>
          <li class="list-group-item">Bebidas</li>
        </ul>
        <!--Platillos-->
        </div>
        <div class="center-container">
        <div class="title">Platillos</div>
         <div class="col-md-6 col-12">
            <div class="dish-container">
                <img class="dish-image" src="/NeoRestaurante/public/img/platillo3.jpg" alt="Imagen del Platillo">
                <div class="dish-info">
                    <h5>Caviar</h5>
                    <p>Caviar con lorem ipsum.</p>
                    <span>$15.99</span>
                </div>
                <button class="add-button">Agregar Pedido</button> <!-- Botón Agregar -->
            </div>
         </div>
            <div class="col-md-6 col-12">
                <div class="dish-container">
                    <img class="dish-image" src="/NeoRestaurante/public/img/platillo3.jpg" alt="Imagen del Platillo">
                    <div class="dish-info">
                        <h5>Caviar</h5>
                        <p>Caviar con lorem ipsum.</p>
                        <span>$15.99</span>
                    </div>
                    <button class="add-button">Agregar Pedido</button> <!-- Botón Agregar -->
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="dish-container">
                    <img class="dish-image" src="/NeoRestaurante/public/img/platillo3.jpg" alt="Imagen del Platillo">
                    <div class="dish-info">
                        <h5>Caviar</h5>
                        <p>Caviar con lorem ipsum.</p>
                        <span>$15.99</span>
                    </div>
                    <button class="add-button">Agregar Pedido</button> <!-- Botón Agregar -->
                </div>
            </div>
                <div class="col-md-6 col-12">
                    <div class="dish-container">
                        <img class="dish-image" src="/NeoRestaurante/public/img/platillo3.jpg" alt="Imagen del Platillo">
                        <div class="dish-info">
                            <h5>Caviar</h5>
                            <p>Caviar con lorem ipsum.</p>
                            <span >$15.99</span>
                        </div>
                        <button class="add-button">Agregar Pedido</button> <!-- Botón Agregar -->
                <!-- Agrega más columnas según sea necesario para los demás platillos -->
                    </div>
                </div>
          </div>
<div class="order-container">
    <p class="order-text">Mis Pedidos</p>
    <hr>
<div class="dish-container">
            <div class="quantity">1x - </div>
            <img class="dish-image order-dish-image" src="/NeoRestaurante/public/img/platillo3.jpg" alt="Imagen del Platillo">
            <div class="dish-info">
                <h5>Caviar</h5>
            </div>
            <div class="dish-description">
                <p class="price">$15.99</p>
            </div>
            <p class="remove-item">x</p>
        </div>
    <div class="button-container">
        <button class="order-button">Continuar</button>
    </div>
</div>
</form>
<script src="/NeoRestaurante/public/js/bootstrap.min.js"></script>
</body>
</html>
