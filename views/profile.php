<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfiles</title>
    <link rel="shortcut icon" href="../public/img/icon.ico">
    <link rel="stylesheet" href="/NeoRestaurante/public/vendor/css/fonts/boxicons.css" />


    <!-- Core CSS -->
    <link rel="stylesheet" href="/NeoRestaurante/public/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/NeoRestaurante/public/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/NeoRestaurante/public/css/demo.css" />
    <link rel="stylesheet" href="/NeoRestaurante/vendors/sweetAlert2/sweetalert2.min.css">
    <link rel="stylesheet" href="/NeoRestaurante/vendors/animate.css/animate.min.css">  
    

    <!-- Helpers -->
    <script src="/NeoRestaurante/public/vendor/js/helpers.js"></script>
    <script src="/NeoRestaurante/public/vendor/js/config.js"></script>
    <style>
      .card{
        margin-top: 5%;
        margin-left: 6%;
        margin-right: 6%;
      }
      .tablita{
        margin-left:2%;
        margin-right:2%;
      }
      .formulario .pass{
        border: 1px solid #DEDEDE;
        
      }
      .formulario .pass-incorrecta{
        border: 1px solid #bb2929;
      }
    </style>
      <script src="/NeoRestaurante/public/vendor/js/jquery.js"></script>
      <link rel="stylesheet" href="/NeoRestaurante/public/vendor/css/css.css">
      <script src="/NeoRestaurante/public/vendor/js/js.js"></script>

</head>
<body onload="getPersons(); dataAdmin();">
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
      <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo d-flex align-items-center">
        <span class="app-brand-logo demo">
          <img src="/NeoRestaurante/public/img/neo-favicon-white.svg" alt="" style="width: 70px; height:70px; cursor: pointer;" onclick="location.href='/NeoRestaurante/index.php'">
        </span>
        <span class="ms-2 fs-7 fw-bold text-uppercase" style="cursor:pointer" onclick="location.href='/NeoRestaurante/index.php'">Neo Restaurant</span>
        </div> 

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item">
              <a href="/NeoRestaurante/views/statistics.php" class="menu-link">
              <!--  <i class="menu-icon tf-icons bx bx-home-circle"></i>--> <!--icono al lado de la seccion-->
                <div data-i18n="Analytics">Estadisticas</div>
              </a>
            </li>
            <li class="menu-item active open">
              <a href="" class="menu-link">
                <div data-i18n="Account">Perfiles</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/NeoRestaurante/views/products.php" class="menu-link">
              <!--  <i class="menu-icon tf-icons bx bx-home-circle"></i>--> <!--icono al lado de la seccion-->
                <div data-i18n="Analytics">Productos</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/NeoRestaurante/views/orders.php" class="menu-link">
              <!--  <i class="menu-icon tf-icons bx bx-home-circle"></i>--> <!--icono al lado de la seccion-->
                <div data-i18n="Analytics">Pedidos</div>
              </a>
            </li>
            <li class="menu-item">
            <a href="/NeoRestaurante/views/reservations.php" class="menu-link">
              <!--  <i class="menu-icon tf-icons bx bx-home-circle"></i>--> <!--icono al lado de la seccion-->
                <div data-i18n="Analytics">Reservaciones</div>
              </a>
            </li>
        
          </ul>
       
        </aside>
        
       
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
              <img src="../public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/bars.svg" alt="" style="widht: 20px; height:20px;"> <!--icono hamburguesa-->
              </a>
            </div>
            

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <div style="margin-top: 5px" id="user"></div>
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                    <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/user.svg" alt class="w-px-30 h-auto rounded-circle" /> <!--avatar-->
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item"onclick="closeSesion()" >
                      <span id="casocerrado"   >Cerrar sesion</span>
                     
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="card">
                <h5 class="card-header">Perfiles de usuarios<button type="button" class="btn btn-secondary" style="margin-left:62%;" data-bs-toggle="modal" data-bs-target="#modalCenter2" >Agregar usuario</button></h5>
                <div class="tablita">
                <div class="table-responsive text-nowrap">
                  <table class="table" id="table_persons">
                    <thead>
                      <tr>
                        <th>Nombres y Apellidos</th>  
                        <th>Identificación</th>
                        <th>Usuario</th>
                        <th>Género</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0" id="inf-body">
                    </tbody>
                  </table>
                </div>
                </div>
                
              </div>
            </div>
          </div>

      </div>
      

      <div class="layout-overlay layout-menu-toggle"></div>
    </div> 

    <!--Modal-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><b>Advertencia</b></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>¿Esta seguro que desea eliminar a este usuario?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" id="borrar" onclick="sendPersonDelete();">Eliminar</button>
      </div>
    </div>
  </div>
</div>
<!--/Modal-->
<!-- /Modal -->
<div class="modal fade" id="modalCenter" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle"><b>Editar Usuario</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body"><!--comienza-->
                            <form id="formulario" class="formulario">
                              <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Nombre</label>
                                    <input type="text" id="nombre"  name="nombre" class="form-control"  placeholder="Ingresa nombre"/>
                                  </div>
                                  <div class="col mb-3">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input type="text" id="apellido"  name="apellido" class="form-control"  placeholder="Ingresa  apellido"/>
                                  </div>
                                  </div>
                                  <div class="row">
                                    <div class="col mb-3">
                                      <label for="descripcion" class="form-label">Identificación</label>
                                      <input type="text" id="cedula"  name="cedula" class="form-control"  placeholder="Ingresa N° cedula"/>
                                    </div>
                                    <div class="col mb-3">
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
                                  </div>
                                  <div class="row">
                                    <div class="col mb-3">
                                    <label for="estado" style="margin-bottom: 8px">Género</label>
                                      <select class="btn btn-light bg-white" name="estado"  id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%; text-align:left;  border-color: #DEDEDE;" >
                                          <option value="No especificado">No especificado</option>
                                          <option value="Masculino">Masculino</option>
                                          <option value="Femenino">Femenino</option>
                                      </select>
                                      </div>
                                      <div class="col mb-3">
                                        <label for="descripcion" class="form-label">N° telefónico</label>
                                        <input type="text" id="telefono"  name="descripcion" class="form-control"  placeholder="Ingresa N° telefono"/>
                                      </div> 
                                  </div>
                                <div class="row">
                                <div class="col mb-3">
                                    <label for="descripcion" class="form-label">Usuario</label>
                                    <input type="text" id="user"  name="user" class="form-control"  placeholder="Ingresa el nombre de usuario"/>
                                  </div>
                                  <div class="col mb-3">
                                  <label for="membresia" style="margin-bottom: 8px">Tipo de membresia</label>
                                    <select class="btn btn-light bg-white" name="membresia"  id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%; text-align:left;  border-color: #DEDEDE;">
                                        <option value="Normal">Normal</option>
                                        <option value="VIP">VIP</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="email" class="form-label">Correo electrónico</label>
                                    <input class="form-control" type="text" id="email" name="email" value="" placeholder="Ingresa tu correo"/>
                                </div>
                                </div>
                                <div class="row" id="contraseñas">
                                <div class="col mb-3">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input class="form-control pass" type="password" id="pass1" name="password1" value="" placeholder="Ingresa la contraseña"/>
                                  </div>
                                  <div class="col mb-3">
                                    <label for="password" class="form-label"> Confirmar contraseña</label>
                                    <input class="form-control pass" type="password" id="pass2" name="password2" value="" placeholder="Repita la contraseña"/>
                                  </div>
                                </div>
                                <p id="errorM" style="display:none; text-align:center; margin-top:15px; color:red">Las contraseñas no son iguales</p>
                                
                                <hr>
                                <div class="row">
                                  <div class="col mb-3">
                                    <label for="direccion" class="form-label">Dirección del usuario</label>
                                    <input type="text" id="address"  name="adress" class="form-control"  placeholder="Ingresa una dirección"/>
                                  </div>
                                </div>
                                <div class="row">
                                <div class="col mb-3">
                                    <label for="municipio" class="form-label">Municipio</label>
                                    <input type="text" id="municipio"  name="municipio" class="form-control"  placeholder="Ingresa un municipio"/>
                                  </div>
                                  <div class="col mb-3">
                                    <label for="referencia" class="form-label">Punto de referencia</label>
                                    <input type="text" id="referencia"  name="referencia" class="form-control"  placeholder="Referencia de tu vivienda"/>
                                  </div>
                                  
                                </div>
                                <hr>
                                <div class="row g-2"></div>
                                
                                <!--aqui-->
                                <!--acaba-->
                              </div><!--termina-->
                              
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button  type="button" id="send" class="btn btn-primary" data-bs-dismiss="modal" onclick="sendPersonEdit()">Guardar cambios</button>
                                
                              </div>
                            </div>
                          </form> 
                          </div>
                        </div>
                      </div>
                    </div>
    <!--/Modal-->
    <div class="modal fade" id="modalCenter2" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle">Agregar Usuario</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body"><!--comienza-->
                            <form id="formulario2" class="formulario">
                              <div class="row">
                              <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Nombre</label>
                                    <input type="text" id="nombre1"  name="nombre" class="form-control"  placeholder="Ingresa nombre y apellido"/>
                                  </div>
                                  <div class="col mb-3">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input type="text" id="apellido1"  name="apellido" class="form-control"  placeholder="Ingresa nombre y apellido"/>
                                  </div>
                                </div>
                                <div class="row">
                                <div class="col mb-3">
                                    <label for="descripcion" class="form-label">Identificación</label>
                                    <input type="text" id="identificacion1"  name="descripcion" class="form-control"  placeholder="Ingresa N° de identificación"/>
                                  </div>
                                <div class="col mb-3">
                                      <label for="fecha">Fecha de nacimiento:</label>
                                      <input type="date" class="form-control"  name="fecha" id="fecha1" placeholder="fecha de nacimiento">
                                      <script>
                                          const fechaInput = document.getElementById('fecha');
                                          fechaInput.addEventListener('change', () => {
                                              const fechaSeleccionada = fechaInput.value;
                                              const fechaFormateada = new Date(fechaSeleccionada).toISOString().split('T')[0];
                                              fechaInput.value = fechaFormateada;
                                          });
                                      </script>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col mb-3">
                                  <label for="estado" style="margin-bottom: 8px">Género</label>
                                    <select class="btn btn-light bg-white" name="estado"  id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%; text-align:left;  border-color: #DEDEDE;" >
                                        <option value="No especificado">No especificado</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                                  </div>
                                  <div class="col mb-3">
                                    <label for="descripcion" class="form-label">N° telefónico</label>
                                    <input type="text" id="telefono1"  name="descripcion" class="form-control"  placeholder="Ingresa N° telefono"/>
                                  </div> 
                                </div>
                                <div class="row">
                                <div class="col mb-3">
                                    <label for="descripcion" class="form-label">Usuario</label>
                                    <input type="text" id="user1"  name="precio" class="form-control"  placeholder="Ingresa el nombre de usuario"/>
                                  </div>
                                  <div class="col mb-3">
                                    <label for="email" class="form-label">Correo electrónico</label>
                                    <input class="form-control" type="text" id="email1" name="email" value="" placeholder="Ingresa tu correo"/>
                                </div>
                                </div>
                                <div class="row" id="contraseñas">
                                <div class="col mb-3">
                                    <label for="password" class="form-label">Contraseña</label>
                                    <input class="form-control pass" type="password" id="password1" name="password1" value="" placeholder="Ingresa la contraseña"/>
                                  </div>
                                  <div class="col mb-3">
                                    <label for="password" class="form-label"> Confirmar contraseña</label>
                                    <input class="form-control pass" type="password" id="password2" name="password2" value="" placeholder="Repita la contraseña"/>
                                  </div>
                                </div>
                                <p style="text-align:center; color:#838EE9;">Nota: Si dejas el campo en blanco, se asignara de contraseña
                                  123456789
                                </p>
                                <p id="errorM2" style="display:none; text-align:center; margin-top:15px; color:red">Las contraseñas no son iguales</p>

                                
                                <div class="row g-2"></div>
                                <!--aqui-->
                                <!--acaba-->
                              </div><!--termina-->  
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" id="btn-1" class="btn btn-primary" data-bs-dismiss="modal" onclick="sendAdminRegister()">Guardar cambios</button>
                                
                              </div>
                            </div>
                          </form> 
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

    <script src="../public/Scripts/datosadmin.js"></script>
    <script src="/NeoRestaurante/vendors/sweetAlert2/popper.min.js"></script>
    <script src="/NeoRestaurante/vendors/sweetAlert2/sweetalert2.all.min.js"></script>
    <script src="/NeoRestaurante/public/vendor/js/bootstrap copy.js"></script>
    <script src="/NeoRestaurante/public/vendor/js/menu.js"></script>
    <script src="/NeoRestaurante/public/vendor/js/main.js"></script>
    <script src="/NeoRestaurante/public/vendor/js/dashboards-analytics.js"></script>
    <script src="/NeoRestaurante/public/Scripts/personsAdmin.js"></script>
    <script src="/NeoRestaurante/public/vendor/libs/js/apex-charts/apexcharts.js"></script>
   
    <script src="../public/Scripts/pass_validation.js"></script>
  
    <script src="../public/Scripts/closeSesion.js"></script>
   
  </body>
</html>