<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/NeoRestaurante/public/css/bootstrap.css">
    <script src="/NeoRestaurante/public/js/bootstrap.min.js"></script>
    <style>
        @font-face {
            font-family: montserrat;
            src: url(/NeoRestaurante/public/Fonts/Montserrat/static/Montserrat-Regular.ttf);
            }
        body{
            font-family: 'montserrat';
            background-color: #DEDEDE;
            background-image: url(/NeoRestaurante/public/img/fondito-raro.svg);
        }    
         #Navbar{
        margin-left: 0%;
        margin-right: 0%;
        position: sticky;
        top: 0;
        left: 0%;
        z-index: 100;
        width: auto;
        min-width: 25%;

      }
      #navbarNav{
        padding-left: 18%;
        font-size: 95%;
      }
      #item{
        padding-left: 5%;
        
      }
      .dropdown {
  display: inline-block;
}

.btn-primary {
  background-color: #337ab7;
  border-color: #337ab7;
}

.dropdown-menu {
  min-width: 100px;
  box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.2);
}

.dropdown-item {
  color: #333;
  padding: 10px 15px;
}

.dropdown-item:hover {
  background-color: #f5f5f5;
}

.slider {
  width: 500px;
  height: 300px;
  overflow: hidden;
}

.slider ul {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
}

.slider ul li {
  width: 100%;
  height: 100%;
  text-align: center;
}

.slider ul li img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.slider ul li h3 {
  color: #fff;
  position: absolute;
  bottom: 10px;
  left: 10px;
}

    </style>
</head>
<body>
    <div id="Navbar">
        <nav class="navbar navbar-expand-lg navbar-light bg-white" >
          <div class="container-fluid" id="Nav-bar">
                  <div class="navbar-brand d-flex"  style="align-items: center; margin-left: 3%;"  href="#" >
                    <img src="./public/img/neo-favicon-white.svg" alt="Logo" width="85" height="85" class="d-inline-block align-top">
                    <span class="ms-2 fs-6 fw-bold text-uppercase">Neo Restaurant</span>
                  </div>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                      <li class="nav-item" id="item">
                          <a class="nav-link active" aria-current="page" href="#" >Menu</a>
                      </li>
                      <li class="nav-item" id="item">
                          <a class="nav-link" href="#">Localización</a>
                      </li>
                      <li class="nav-item" id="item">
                          <a class="nav-link" href="#">Nosotros</a>
                      </li>
                      <li class="nav-item" id="item">
                          <a class="nav-link" href="#">Contacto</a>
                      </li>
                      <li class="nav-item" id="item"  style="white-space: nowrap;">
                        <a class="nav-link" href="./views/Auth/login.html">Iniciar Sesión</a>
                    </li>
                   </ul>
                  </div> 
          </div>
      </nav>
    </div>

      <form id="formulario" class="container">
        <div class="RForm_cont">
    
          <h1>Formulario de Registro</h1>
          <div class="card bg-light rounded-3 col-md-5 card-body " id="Contenedor">
    
            <div id="campos">
    
                <div class="form-group">
                    <label for="nombre">Nombres:</label>
                    <input type="text" class="form-control" name="nombre" placeholder="Ingrese sus nombres">
                </div>
                <div class="form-group">
                      <label for="apellido">Apellidos:</label>
                    <input type="text" class="form-control"  name="apellido"  placeholder="Ingrese sus apellidos">
                    <div class="form-group">
                    <label for="fecha">Fecha de nacimiento:</label>
                    <input type="date" class="form-control"  name="fecha" id="fecha" placeholder="su fecha de nacimiento">
                    <script>
                      const fechaInput = document.getElementById('fecha');
                      fechaInput.addEventListener('change', () => {
                        const fechaSeleccionada = fechaInput.value;
                        const fechaFormateada = new Date(fechaSeleccionada).toISOString().split('T')[0];
                        fechaInput.value = fechaFormateada;
                      });
                    </script>
                  </div>
                  <label for="cedula">Cedula:</label>
                  <input type="text" class="form-control" name="cedula" placeholder="Ingrese su cedula">
          </div>
          <div class="form-group">
              <label for="correo">Correo electrónico:</label>
              <input type="email" class="form-control" name="correo" placeholder="Ingrese su correo electrónico">
            </div>
            <div class="form-group">
                <label for="telefono">Número de Teléfono:</label>
                <input type="tel" class="form-control" name="telefono" placeholder="Ingrese su número de Teléfono">
            </div>
            <div class="form-group">
              <label for="usuario">Nombre de Usuario:</label>
              <input type="text" class="form-control"  name="usuario" placeholder="Ingrese su nombre de usuario">
            </div>
            <div class="form-group">
              <label for="contraseña">Contraseña:</label>
              <input type="password" class="form-control" name="contraseña" placeholder="Ingrese su contraseña">
            </div>

            <br>
            <button type="submit" class="btn btn-primary">Registrarse</button>
            <br>
        </div>

      </div>
    </div>
    </form>
    <div id="Logo-restaurante" class="float-end img-fluid" >
      <img src="./img/neo-high-resolution-logo-black-transparent-1(2).png" alt="Logo">
    </div>

    <div class="dropdown">
      <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
        Seleccionar opción
      </button>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">Opción 1</a></li>
        <li><a class="dropdown-item" href="#">Opción 2</a></li>
        <li><a class="dropdown-item" href="#">Opción 3</a></li>
      </ul>
    </div>
    <script>
      const dropdownButton = document.getElementById('dropdownMenuButton');
      const dropdownMenu = document.querySelector('.dropdown-menu');
      const dropdownItems = document.querySelectorAll('.dropdown-item');

      dropdownButton.addEventListener('click', () => {
       dropdownMenu.classList.toggle('show');
       dropdownItems.forEach(item => {
  item.addEventListener('click', () => {
    dropdownMenu.classList.remove('show');
  });
});
});

    </script>

<div class="slider">
  <ul class="slider ul">
    <li class="slider ul li">
      <img src="/NeoRestaurante/public/img/Cafe.png" alt="Platillo 1" class="slider ul li img">
      <h3>Título Platillo 1</h3>
    </li>
    <li class="slider ul li">
      <img src="/NeoRestaurante/public/img/vinitos1.png" alt="Platillo 2" class="slider ul li img">
      <h3>Título Platillo 2</h3>
    </li>
    <li class="slider ul li">
      <img src="/NeoRestaurante/public/img/vinitos2.png" alt="Platillo 3" class="slider ul li img">
      <h3 class="slider ul li h3">Título Platillo 3</h3>
    </li>
  </ul>
</div>
    
<script>
  const sliderUl = document.querySelector('.slider ul');
const sliderButtons = document.querySelectorAll('.slider-button');

let currentSlide = 0;

sliderButtons[0].addEventListener('click', () => {
  if (currentSlide > 0) {
    currentSlide--;
    sliderUl.style.marginLeft = `-${currentSlide * 100}%`;
  }
});

sliderButtons[1].addEventListener('click', () => {
  if (currentSlide < sliderUl.children.length - 1) {
    currentSlide++;
    sliderUl.style.marginLeft = `-${currentSlide * 100}%`;
  }
});
</script>
    <script src="./Scripts/register.js"></script> 
</body>
</html>