<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
    <link rel="shortcut icon" href="../public/img/icon.ico">
    <link rel="stylesheet" href="/NeoRestaurante/public/css/bootstrap.css">
    <script src="/NeoRestaurante/public/js/bootstrap.min.js"></script>
    <style>
        @font-face {
            font-family: montserrat;
            src: url(/NeoRestaurante/public/Fonts/Montserrat/static/Montserrat-Regular.ttf);
        }

        body {
            background-color: black;
            font-family: 'montserrat';
            margin: 0;
            padding: 0;
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

        #navbarNav {
            padding-left: 35%;
            font-size: 95%;
        }

        

        #item {
            margin-left: 3%;
            padding-left: 5%;
        }
        #item-user{
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
            width: 80%;
            height: 2px;
            background-color: #301f14; /* Color de la línea */
        }

        .container {
            background-color: white;
            padding: 20px;
            width: 80%;
            height: auto;
            overflow: auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }

        #map-container {
            display: flex;
            flex-direction: row-reverse ;
            align-items: center;
            justify-content: center;
            
        }



        #side-box {
            width: 200px;
            height:350px;
            background-color: #170E09;
            color: white;
            text-align: center;
            margin-bottom: 7px;
        }

        #side-box p {
            margin: 5px;
            line-height: 15px;
            
        }

                @media only screen and (max-width: 360px) and (max-height: 740px) {
            /* Ajustes específicos para esta resolución */
            .body{
                font-size: 12px;
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
                width: 35%;
                height: 2px;
                background-color: #301f14; /* Color de la línea */
        }  


            .container {
                width: 100%;
                padding-left: 0px;
                padding-right: 0px;
            }

            #map-container {
                flex-direction: column;
                
            }

            #map {
                width: 100%;
                margin-top: 20px;
                
                margin-bottom: 20px;
            }
            
            #side-box {
                width: 100%;
                height: auto;
                margin-bottom: 10px;
            }
            .social-icons {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .social-icons img {
                margin-bottom: 10px;
            }
        
        }
    </style>
</head>
<body onload="userData();">
<!--Barra de navegacion-->
<div id="Navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid" id="Nav-bar">
            <div class="navbar-brand d-flex" style="align-items: center; cursor: pointer; margin-left: 3%;" onclick="location.href='../'">
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
                        <a class="nav-link" href="./reservation">Reserva</a>
                    </li>
                    <li class="nav-item" id="item">
                        <a class="nav-link" href="./we">Nosotros</a>
                    </li>
                    <li class="nav-item" id="item">
                        <a class="nav-link active" href="#contactus">Contacto</a>
                    </li>
                    <li class="nav-item" id="item-user"  style="white-space: nowrap;">
                    <a id="titleusers" class="nav-link" href="./Auth/login.php">Iniciar Sesión</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container mt-0">
    <div class="text-center">
        <h1 style="display: inline-block; border-bottom: 5px solid #301f14; margin-bottom:20px;"><b>Ubicación</b></h1>
    </div>
    <div id="map-container">
        <div id="side-box">
            <p style="padding-top: 25px;"><b>Nueva Esparta</b></p>
            <br>
            <p>Pampatar 6316</p>
            <p>Calle</p>
            <p>Nueva Cadiz</p>
            <br>
            <p><b>Horarios</b></p>
            <br>
            <p>Lun - Vie</p>
            <p>| 11:00am - 11:00pm |</p>
            <p>Sab - Dom</p>
            <p>| 11:00am - 12:00pm |</p>
        </div>
        <div id="map" class="text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.6265850578534!2d-63.80571438978583!3d10.99153255514482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c318fa66dd623d9%3A0xb0e705d5169b86c2!2sX5RW%2BJQ4%2C%20C.%20Nueva%20C%C3%A1diz%2C%20Pampatar%206316%2C%20Nueva%20Esparta!5e0!3m2!1ses-419!2sve!4v1709667280311!5m2!1ses-419!2sve" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
        <div class="text-center mt-4">
            <h1 style="display: inline-block; border-bottom: 5px solid #301f14; margin-bottom:20px;"><b>Contacto</b></h1>
            <p>0295-2692733</p>
            <p>neocontactooficial@gmail.com</p>
        <div class="social-icons">
            <img src="/NeoRestaurante/public/img/instagram.svg" alt="Instagram" style="cursor: pointer;width: 25px; height: 25px;" onclick="location.href='../'">
            <span style="vertical-align: middle;">@neorestaurante</span>
        </div>
        <div class="social-icons">
            <img src="/NeoRestaurante/public/img/facebook.svg" alt="Facebook" style="cursor: pointer;width: 25px; height: 25px; " onclick="location.href='../'">
            <span style="vertical-align: middle;">Neo Restaurante</span>
        </div>
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

    <script src="../public/Scripts/auth.js"></script>
    <script src="/NeoRestaurante/public/js/bootstrap.bundle.js"></script>
</body>
</html>
