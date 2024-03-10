<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros</title>
    <link rel="stylesheet" href="/NeoRestaurante/public/css/bootstrap.css">
    <script src="/NeoRestaurante/public/js/bootstrap.min.js"></script>
    <style>
        @font-face {
            font-family: montserrat;
            src: url(/NeoRestaurante/public/Fonts/Montserrat/static/Montserrat-Regular.ttf);
            }
        body{
        font-family: 'montserrat';
        
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
            width: 80.5%;
            height: 2px;
            background-color: #301f14; /* Color de la línea */
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
                      <a class="nav-link" aria-current="page" href="./menu">Menú</a>
                  </li>
                  <li class="nav-item" id="item">
                      <a class="nav-link" href="./reservation">Reserva</a>
                  </li>
                  <li class="nav-item" id="item">
                      <a class="nav-link active" href="#we" style="color: #301f14;">Nosotros</a>
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

<!-- Contenedor "¡PROXIMAMENTE!" con imágenes encima -->
    <div class="container-fluid bg-black text-white py-3">
        <div class="row align-items-center" style=" height: 190px;">
            <!-- Imagen a la izquierda -->
            <div class="col-md-3 text-center">
                <img src="/NeoRestaurante/public/img/imagen_2024-03-08_101718981.png" alt="Left Image" style="width: 200px; margin-right:130px;">
            </div>
            <!-- Texto centralizado -->
            <div class="col-md-6 text-center">
                <h1 class="display-4">Sobre Nosotros</h1>
            </div>
            <!-- Imagen a la derecha -->
            <div class="col-md-3 text-center">
                <img src="/NeoRestaurante/public/img/imagen_2024-03-08_101718981.png" alt="Right Image" style="width: 200px; margin-left:120px;">
            </div>
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12 text-center" style="padding-bottom:40px; margin-top:20px;">
            <h2><b>La Historia de Neo Restaurante</b></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eleifend pharetra arcu, sit amet lacinia tortor auctor vel. Donec posuere, mi eget pharetra blandit, sem ante pellentesque metus, nec cursus nunc risus et nulla. Quisque semper justo in justo consectetur, at interdum dui tincidunt. Vivamus tincidunt justo ac mi fringilla, nec lobortis ex scelerisque. Pellentesque vitae efficitur nunc. Integer non velit metus.
            </p>
        </div>
        <div class="col-md-4">
            <img src="/NeoRestaurante/public/img/OIG1.B.j78s.jpeg" alt="Imagen" class="img-fluid">
        </div>
    </div>
</div>


</form>
<script src="/NeoRestaurante/public/Scripts/auth.js"></script>
</body>
</html>