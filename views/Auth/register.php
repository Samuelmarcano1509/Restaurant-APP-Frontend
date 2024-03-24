<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="shortcut icon" href="../../public/img/icon.ico">
    <link rel="stylesheet" href="/NeoRestaurante/public/css/bootstrap.min.css">
    <script src="/NeoRestaurante/public/js/bootstrap.min.js"></script> 
    <script>
        const dropdownElement = document.getElementById('dropdownMenuButton');
        const dropdown = new bootstrap.Dropdown(dropdownElement);
    </script>
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
    
    
      #campos{
        margin-top: 0.8%;
        margin-bottom: 2% ;
        margin-left: 15%;
        margin-right:15%; 
      }
      #navbarNav{
        padding-left: 28.5%;
        font-size: 95%;
        
      }
      #navbar{
        position: sticky;
        top: 0;
        left: 0;
        z-index: 100;
        width: 100%;
      }
      
      #item{
        margin-left: 3%;
        padding-left: 5%;
      }
      .dropdown {
    display: inline-block;
    }

    .btn-primary {
    background-color: white;
    border-color: gray;
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
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #301f14; /* Color de la línea */
        }
         .modal-body{
             justify-content: center;
             align-items: center; 
             display: flex;
         }
      .spinner-hide{
          display: flex;
      }

      .form-validation-icon{
        position: absolute;
        opacity: 0;
      }

      .form-group-incorrect{
        
      }

      .form-group-correct{
        
      }

    </style> 
</head>
<body class="">
  <div id="navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-white" >
      <div class="container-fluid" id="Nav-bar">
              <div class="navbar-brand d-flex"  style="align-items: center; cursor: pointer; margin-left: 3%;"  onclick="location.href='../../'" >
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
                    <a class="nav-link " href="./login" >Iniciar Sesión</a>
                    </li>
              </ul>
              </div> 
              <div class="my-3">
      </div>
  </nav>
  </div>
<div class="RForm_cont d-flex flex-column align-items-center mt-5">
    <div class="card bg-light rounded-3 col-md-8 col-lg-6 card-body mx-3 shadow-lg p-3 bg-body rounded" style="border-color: #DEDEDE;">
        <h1 class="text-center mb-2"><b>Registro de Usuario</b></h1>
        <form id="formulario">
            <div id="campos">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="nombre">Nombres:</label>
                        <div>
                        <input type="text" class="form-control" name="nombre" placeholder="Ingrese sus nombres">
                        <!-- style="top: 19.5%; left: 44.4%" -->
                        <i class="form-validation-icon fa-regular fa-circle-question"></i>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="apellido">Apellidos:</label>
                        <div>
                        <input type="text" class="form-control"  name="apellido"  placeholder="Ingrese su apellido">
                        <i class="form-validation-icon fa-regular fa-circle-question"></i>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="fecha">Fecha de nacimiento:</label>
                        <input type="date" class="form-control"  name="fecha" id="fecha" placeholder="fecha de nacimiento">
                        <script>
                            const fechaInput = document.getElementById('fecha');
                            fechaInput.addEventListener('change', () => {
                                const fechaSeleccionada = fechaInput.value;
                                const fechaFormateada = new Date(fechaSeleccionada).toISOString().split('T')[0];
                                fechaInput.value = fechaFormateada;
                            });
                        </script>
                    </div>
                    <div class="form-group col-md-6">
                            <label for="cedula">Cedula:</label>
                            <div>
                            <input type="text" class="form-control" name="cedula" placeholder="Ingrese su cedula">
                            <i class="form-validation-icon fa-regular fa-circle-question"></i>
                        </div>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="telefono">Número de Teléfono:</label>
                        <div>
                        <input type="tel" class="form-control" name="telefono" placeholder="N° Teléfono">
                        <i class="form-validation-icon fa-regular fa-circle-question"></i>
                        </div>
                    </div>
                    <div class="dropdown col-md-6" id="selector">
                       <label for="genero">Género</label>
                        <select class="btn btn-light bg-white" name="genero"  id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%; text-align:left;  border-color: #DEDEDE;" >
                            <option><a>No especificado</a></option>
                            <option><a>Masculino</a></option>
                            <option><a>Femenino</a></option>
                        </select>
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
            </div>      
               
          <div class="form-group">
              <label for="correo">Correo electrónico:</label>
              <div>
              <input type="email" class="form-control" name="correo" placeholder="Ingrese su correo electrónico">
              <i class="form-validation-icon fa-regular fa-circle-question"></i>
              </div>
          </div>
          
           <div class="form-group col-12">
                    <label for="usuario">Nombre de Usuario:</label>
                    <div>
                    <input type="text" class="form-control"  name="usuario" placeholder="Ingrese su nombre de usuario">
                    <i class="form-validation-icon fa-regular fa-circle-question"></i>
                    </div>
                </div>
            <div class="row">
                <div class="form-group col-12">
                    <label for="contraseña">Contraseña:</label>
                    <div>
                    <input type="password" class="form-control" name="contraseña" placeholder="Ingrese su contraseña">
                    <i class="form-validation-icon fa-regular fa-circle-question"></i>
                    </div>
                </div>
                <div class="form-group col-12">
                    <label for="confirm">Confirmar contraseña:</label>
                    <div>
                    <input type="password" class="form-control" name="confirm" placeholder="Repita la contraseña">
                    <i class="form-validation-icon fa-regular fa-circle-question"></i>
                    </div>
                </div>
            </div>
                 <br>
                <div class="form-group col-md-9 d-flex justify-content-center" style="margin-left: 12.5%;">
                    <button type="button" onclick="register()"class="btn btn-lg" data-bs-toggle="modal" data-bs-target="#modal_msg" style="background-color:#301f14; width: 100%; border-radius: 0; color:white; font-size: 80%;"><b>Registrarse</b></button>
                </div>
                <div class="text-center">
                        <p class="link-text" onclick="location.href='../../'" style="cursor: pointer; font-size: 60%; padding-top:20px">Volver al inicio</p>
                    </div>
            </div>
        </form>
    </div>
</div>



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



<script src="/NeoRestaurante/public/Scripts/form_validation.js"></script>
<script src="/NeoRestaurante/public/Scripts/validation.js"></script>
<script src="/NeoRestaurante/public/Scripts/auth.js"></script>

</body>

</html>