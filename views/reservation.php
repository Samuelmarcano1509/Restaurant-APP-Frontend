<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
    <link rel="stylesheet" href="/NeoRestaurante/public/css/bootstrap.css">
    <script src="/NeoRestaurante/public/js/bootstrap.min.js"></script>
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
          background-color: #DEDEDE;
          border: 2px solid black;
          padding: 20px;
          border-radius: 10px;
          text-align: center; /* Centrar el texto */
        }
        .form-select,
        .form-control {
          border-color: black; /* Borde negro para todos los campos */
          margin-left: 50px;
          margin-top: 80px;
          
    }
    
        .btn-reservar {
          margin-top: 80px;
          background-color: #301F14;
          border-color: #301F14;
    }
        .btn-reservar:hover {
          background-color: #301F14; 
          border-color: #301F14;
          color: white; 
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
                  <li class="nav-item" id="item"  style="white-space: nowrap;">
                    <a class="nav-link" href="./Auth/login">Iniciar Sesión</a>
                </li>
               </ul>
              </div> 
      </div>
  </nav>
  </div>
<div class="container"> 
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 formulario">
            <h2 class="text-center mb-4">Reservar una Mesa</h2>
            <p class="text-center mb-4">Para reservar una mesa en Neo Restaurante, seleccione el número de personas, la fecha y la hora para su reservación.</p>
            <form>
                <div class="mb-3 d-flex">
                    <select class="form-select me-2 mb-2" id="numPersonas" name="numPersonas" style="font-size: 15px; width: 200px;">
                        <option value="" disabled selected hidden>N° de Personas</option>
                        <option value="1">2 Persona</option>
                        <option value="2">4 Personas</option>
                        <option value="3">6 Personas</option>
                        <option value="4">8 Personas</option>
                        <option value="5">10 Personas</option>
                        <option value="6">12 Personas</option>
                    </select>
                    <input type="date" class="form-control me-2 mb-2" id="fecha" name="fecha" style="width: 200px;">
                    <select class="form-select me-2 mb-2" id="numPersonas" name="numPersonas" style="font-size: 15px; width: 200px;">
                        <option value="" disabled selected hidden>Hora</option>
                        <option value="1">11:00 am</option>
                        <option value="2">11:30 am</option>
                        <option value="3">12:00 pm</option>
                        <option value="4">12:30 pm</option>
                        <option value="5">01:00 pm</option>
                        <option value="6">01:30 pm</option>
                        <option value="7">02:00 pm</option>
                        <option value="8">02:30 pm</option>
                        <option value="9">03:00 pm</option>
                        <option value="10">03:30 pm</option>
                        <option value="11">04:00 pm</option>
                        <option value="12">04:30 pm</option>
                        <option value="13">05:00 pm</option>
                        <option value="14">05:30 pm</option>
                        <option value="15">06:00 pm</option>
                        <option value="16">06:30 pm</option>
                        <option value="17">07:00 pm</option>
                        <option value="18">07:30 pm</option>
                        <option value="19">08:30 pm</option>
                        <option value="20">09:00 pm</option>
                        <option value="21">09:30 pm</option>
                        <option value="22">10:00 pm</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary btn-reservar" style="width:200px; font-size: 25px;">Reservar</button>
            </form>
        </div>
    </div>
</div>


</form>
<script src="/NeoRestaurante/public/Scripts/auth.js"></script>
</body>
</html>
