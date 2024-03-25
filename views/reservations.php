<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
    <link rel="shortcut icon" href="../public/img/icon.ico">
    <link rel="stylesheet" href="/NeoRestaurante/public/vendor/css/fonts/boxicons.css" />


    <!-- Core CSS -->
    <link rel="stylesheet" href="/NeoRestaurante/public/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/NeoRestaurante/public/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/NeoRestaurante/public/css/demo.css" />

  
    

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
    </style>

      <script src="/NeoRestaurante/public/vendor/js/jquery.js"></script>
      <link rel="stylesheet" href="/NeoRestaurante/public/vendor/css/css.css">
      <script src="/NeoRestaurante/public/vendor/js/js.js"></script>
</head>
<body onload="getReservations();">
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
      <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
        <div class="app-brand demo d-flex align-items-center">
        <span class="app-brand-logo demo">
          <img src="/NeoRestaurante/public/img/neo-favicon-white.svg" alt="" style="width: 70px; height:70px;">
        </span>
        <span class="ms-2 fs-7 fw-bold text-uppercase">Neo Restaurant</span>
        </div> 

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
            <li class="menu-item ">
              <a href="/NeoRestaurante/views/statistics.php" class="menu-link">
                <!--  <i class="menu-icon tf-icons bx bx-home-circle"></i>--> <!--icono al lado de la seccion-->
                <div data-i18n="Analytics">Estadisticas</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/NeoRestaurante/views/profile.php" class="menu-link">
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
            <li class="menu-item active open">
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

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
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

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      
                    <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/user.svg" alt class="w-px-30 h-auto rounded-circle" /> <!--avatar-->
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" >
                      <span id="casocerrado"  onclick="closeSesion()" >Cerrar sesion</span>
                     
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
            <h5 class="card-header">Listado de Reservaciones <button type="button" class="btn btn-secondary" style="margin-left:54%;" data-bs-toggle="modal" data-bs-target="#modalCenter2" onclick="getUsers()" >Agregar reservación</button></h5>
            <div class="tablita">
            <div class="table-responsive text-nowrap">
                  <table class="table" id="table_reservation">
                    <thead>
                      <tr>
                        <th>Nombre y Apellido</th>
                        <th>Mesa</th>
                        <th>Estatus</th>
                        <th>Fecha de reserva</th>
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
        <p>¿Esta seguro que desea eliminar esta reservación?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-danger"  data-bs-dismiss="modal" id="borrar" onclick="deleteReservation()">Eliminar</button>
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
                                <h5 class="modal-title" id="modalCenterTitle"><b>Editar Reservacion</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body"><!--comienza-->
                                <div class="row">
                                    <div class="col mb-3">
                                    <label for="usuario" class="form-label">Usuarios disponibles</label>
                                      <select class="btn btn-light bg-white" name="usuario"  id="dropdownMenuButton6" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%; text-align:left;  border-color: #DEDEDE;" >
                                    </select>
                                    </div>
                                    <div class="col mb-3">
                                      <label for="mesas" class="form-label">Mesas</label>
                                      <select class="btn btn-light bg-white" name="mesas"  id="dropdownMenuButton7" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%; text-align:left;  border-color: #DEDEDE;" >
                                    </select>
                                    </div>
                                  </div>
                                  <div class="row">
                                  <div class="col mb-3">
                                      <label for="fecha">Fecha de reservación:</label>
                                      <input type="date" class="form-control"  name="fecha" id="fecha4" placeholder="fecha de reservacion">
                                      <script>
                                          const fechaInput = document.getElementById('fecha');
                                          fechaInput.addEventListener('change', () => {
                                              const fechaSeleccionada = fechaInput.value;
                                              const fechaFormateada = new Date(fechaSeleccionada).toISOString().split('T')[0];
                                              fechaInput.value = fechaFormateada;
                                          });
                                      </script>
                                  </div>
                                    <div class="col mb-3" >
                                      <label for="hora2" class="form-label">Hora de Reservación</label>
                                      <input type="time" name="hora4" id="hora4" style="margin-left: 20%;">
                                    </div>
                                    <div class="col mb-3">
                                    <label for="estado" style="margin-bottom: 8px">Estado</label>
                                    <select class="btn btn-light bg-white" name="estado"  id="dropdownMenuButton9" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%; text-align:left;  border-color: #DEDEDE;" >
                                        <option value="1">Activa</option>
                                        <option value="2">Cancelada</option>
                                    </select>
                                  </div>
                                  </div>
                                <div class="row g-2"></div>
                                <!--aqui-->
                                <!--acaba-->
                              </div><!--termina-->  
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" id="send"onclick="editReservation()">Guardar cambios</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
<!--Modal-->
<div class="modal fade" id="modalCenter2" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" tabindex="-1" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="modalCenterTitle"><b>Agregar Reservacion</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body"><!--comienza-->
                                <div class="row">
                                    <div class="col mb-3">
                                    <label for="usuario" class="form-label">Usuarios disponibles</label>
                                      <select class="btn btn-light bg-white" name="usuario"  id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%; text-align:left;  border-color: #DEDEDE;" >
                                    </select>
                                    </div>
                                    <div class="col mb-3">
                                      <label for="mesas" class="form-label">Mesas</label>
                                      <select class="btn btn-light bg-white" name="mesas"  id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%; text-align:left;  border-color: #DEDEDE;" >
                                    </select>
                                    </div>
                                  </div>
                                  <div class="row">
                                  <div class="col mb-3">
                                      <label for="fecha">Fecha de reservación:</label>
                                      <input type="date" class="form-control"  name="fecha" id="fecha3" placeholder="fecha de reservacion">
                                      <script>
                                          const fechaInput = document.getElementById('fecha');
                                          fechaInput.addEventListener('change', () => {
                                              const fechaSeleccionada = fechaInput.value;
                                              const fechaFormateada = new Date(fechaSeleccionada).toISOString().split('T')[0];
                                              fechaInput.value = fechaFormateada;
                                          });
                                      </script>
                                  </div>
                                    <div class="col mb-5" >
                                      <label for="hora2" class="form-label" style="margin-top:13%; margin-left:3%;" >Hora de Reservación</label>
                                      <input type="time" name="hora2"  id="hora2" >
                                    </div>
                                  </div>
                                <div class="row g-2"></div>
                                <!--aqui-->
                                <!--acaba-->
                              </div><!--termina-->  
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="reservationTable()">Guardar cambios</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
 <!--/Modal-->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>               
    <script src="/NeoRestaurante/public/vendor/js/bootstrap copy.js"></script>
    <script src="/NeoRestaurante/public/vendor/js/menu.js"></script>
    <script src="/NeoRestaurante/public/vendor/js/main.js"></script>
    <script src="/NeoRestaurante/public/vendor/js/dashboards-analytics.js"></script>
    <script src="/NeoRestaurante/public/Scripts/auth.js"></script>
    <script src="/NeoRestaurante/public/Scripts/reservationAdmin.js"></script>
    <script src="/NeoRestaurante/public/vendor/libs/js/apex-charts/apexcharts.js"></script>
  </body>
</html>