<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        margin-left: 7%;
        margin-right: 7%;
      }
    </style>

</head>
<body onload="getPersons()">
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
                <h5 class="card-header">Perfiles de usuarios<button type="button" class="btn btn-secondary" style="margin-left:62%;" data-bs-toggle="modal" data-bs-target="#modalCenter2" >Agregar usuario</button></h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
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
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Eliminar</button>
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
                            <form id="formulario">
                              <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Nombre</label>
                                    <input type="text" id="nombre"  name="nombre" class="form-control"  placeholder="Ingresa nombre"/>
                                  </div>
                                  <div class="col mb-3">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input type="text" id="apellido"  name="apellido" class="form-control"  placeholder="Ingresa  apellido"/>
                                  </div>
                                  <div class="col mb-3">
                                    <label for="descripcion" class="form-label">N° telefónico</label>
                                    <input type="text" id="descripcion"  name="descripcion" class="form-control"  placeholder="Ingresa N° telefono"/>
                                  </div>
                                </div>
                                <div class="row">
                                <div class="col mb-3">
                                    <label for="descripcion" class="form-label">Identificación</label>
                                    <input type="text" id="descripcion"  name="descripcion" class="form-control"  placeholder="Ingresa N° cedula"/>
                                  </div>
                                <div class="col mb-3">
                                    <label for="descripcion" class="form-label">Usuario</label>
                                    <input type="text" id="precio"  name="precio" class="form-control"  placeholder="Ingresa el nombre de usuario"/>
                                  </div>
                                  <div class="col mb-3">
                                  <label for="estado" style="margin-bottom: 8px">Género</label>
                                    <select class="btn btn-light bg-white" name="estado"  id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%; text-align:left;  border-color: #DEDEDE;" >
                                        <option value="Disponible">No especificado</option>
                                        <option value="No disponible">Masculino</option>
                                        <option value="No disponible">Femenino</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row">
                                <div class="col mb-3">
                                    <label for="addres" class="form-label">Dirección</label>
                                    <input type="text" id="addres"  name="addres" class="form-control"  placeholder="Ingresa una dirección"/>
                                  </div>
                                </div>
                                <div class="row g-2"></div>
                                <!--aqui-->
                                <!--acaba-->
                              </div><!--termina-->  
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button  type="button" class="btn btn-primary" data-bs-dismiss="modal">Guardar cambios</button>
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
                            <form id="formulario2">
                              <div class="row">
                              <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Nombre</label>
                                    <input type="text" id="nombre"  name="nombre" class="form-control"  placeholder="Ingresa nombre y apellido"/>
                                  </div>
                                  <div class="col mb-3">
                                    <label for="apellido" class="form-label">Apellido</label>
                                    <input type="text" id="apellido"  name="apellido" class="form-control"  placeholder="Ingresa nombre y apellido"/>
                                  </div>
                                  <div class="col mb-3">
                                    <label for="descripcion" class="form-label">Identificación</label>
                                    <input type="text" id="descripcion"  name="descripcion" class="form-control"  placeholder="Ingresa N° de identificación"/>
                                  </div>
                                </div>
                                <div class="row">
                                <div class="col mb-3">
                                    <label for="descripcion" class="form-label">Usuario</label>
                                    <input type="text" id="precio"  name="precio" class="form-control"  placeholder="Ingresa el nombre de usuario"/>
                                  </div>
                                  <div class="col mb-3">
                                  <label for="estado" style="margin-bottom: 8px">Género</label>
                                    <select class="btn btn-light bg-white" name="estado"  id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%; text-align:left;  border-color: #DEDEDE;" >
                                        <option value="Disponible">No especificado</option>
                                        <option value="No disponible">Masculino</option>
                                        <option value="No disponible">Femenino</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row g-2"></div>
                                <!--aqui-->
                                <!--acaba-->
                              </div><!--termina-->  
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Guardar cambios</button>
                              </div>
                            </div>
                          </form> 
                          </div>
                        </div>
                      </div>
                    </div>
    <script src="/NeoRestaurante/vendors/sweetAlert2/popper.min.js"></script>
    <script src="/NeoRestaurante/vendors/sweetAlert2/sweetalert2.all.min.js"></script>
    <script src="/NeoRestaurante/public/vendor/js/bootstrap copy.js"></script>
    <script src="/NeoRestaurante/public/vendor/js/menu.js"></script>
    <script src="/NeoRestaurante/public/vendor/js/main.js"></script>
    <script src="/NeoRestaurante/public/vendor/js/dashboards-analytics.js"></script>
    <script src="/NeoRestaurante/public/Scripts/personsAdmin.js"></script>
    <script src="/NeoRestaurante/public/vendor/libs/js/apex-charts/apexcharts.js"></script>
  </body>
</html>