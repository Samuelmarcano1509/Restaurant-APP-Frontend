<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
    <link rel="stylesheet" href="/NeoRestaurante/public/css/bootstrap.css">
    <script src="/NeoRestaurante/public/js/bootstrap.min.js"></script>
    <style>
        @font-face {
            font-family: montserrat;
            src: url(/NeoRestaurante/public/Fonts/Montserrat/static/Montserrat-Regular.ttf);
        }

        body {
            font-family: 'montserrat';
            background-image: url('/NeoRestaurante/public/img/imagen_2024-03-08_101718981.png');
            background-size: 100%;
            background-position: center;
            margin: 0;
            padding: 0;
        }

        #navbarNav {
            padding-left: 24%;
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
            flex-direction: row;
            align-items: center;
            justify-content: center;
            
        }



        #side-box {
            width: 200px;
            height:300px;
            background-color: #170E09;
            color: white;
            text-align: center;
            margin-bottom: 7px;
        }

        #side-box p {
            margin: 10px 0;
        }
    </style>
</head>
<body>
<!--Barra de navegacion-->
<div id="navbar">
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
                        <a class="nav-link" href="./localization">Reserva</a>
                    </li>
                    <li class="nav-item" id="item">
                        <a class="nav-link" href="./we">Nosotros</a>
                    </li>
                    <li class="nav-item" id="item">
                        <a class="nav-link active" href="#contactus">Contacto</a>
                    </li>
                    <li class="nav-item" id="item"  style="white-space: nowrap;">
                        <a class="nav-link" href="./Auth/login">Iniciar Sesión</a>
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
            <div id="map" class="text-center">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.6265850578534!2d-63.80571438978583!3d10.99153255514482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c318fa66dd623d9%3A0xb0e705d5169b86c2!2sX5RW%2BJQ4%2C%20C.%20Nueva%20C%C3%A1diz%2C%20Pampatar%206316%2C%20Nueva%20Esparta!5e0!3m2!1ses-419!2sve!4v1709667280311!5m2!1ses-419!2sve" width="300" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div id="side-box">
                <p><b>Nueva Esparta</b></p>
                <p>Pampatar 6316 Calle Nueva Cadiz</p>
                <p>Horarios:</p>
                <p>Lun - Vie</p>
                <p>| 11:00am - 11:00pm |</p>
                <p>Sab - Dom</p>
                <p>| 11:00am - 12:00pm |</p>
            </div>
        </div>
        <div class="text-center mt-4">
            <h1 style="display: inline-block; border-bottom: 5px solid #301f14; margin-bottom:20px;"><b>Contacto</b></h1>
            <p>0295-2692733</p>
            <p>neocontacto@gmail.com</p>
            <p>
                <img src="/NeoRestaurante/public/img/instagram.svg" alt="Imagen1" style="width: 25px; height: 25px;"> @neorestaurante 
                <span style="margin-left: 20px;"><img src="/NeoRestaurante/public/img/facebook.svg" alt="Imagen2" style="width: 25px; height: 25px;"> Neo Restaurante</span>
            </p>
        </div>
    </div>
</body>
</html>
