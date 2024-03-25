<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi perfil</title>
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
        margin-left: 7%;
        margin-right: 7%;
      }
    </style>

</head>
<body>
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
            <li class="menu-item active open">
              <a href="" class="menu-link">
                <div data-i18n="Account">Mi perfil</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="/NeoRestaurante/views/user-orders.php" class="menu-link">
              <!--  <i class="menu-icon tf-icons bx bx-home-circle"></i>--> <!--icono al lado de la seccion-->
                <div data-i18n="Analytics">Mis Pedidos</div>
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
            <div class="card mb-4">
              <div class="card-body"><!---->
                      <form id="formAccountSettings">
                        <div class="row">
                          <div class="mb-3 col-md-6">
                            <label for="firstName" class="form-label">Nombre</label>
                            <input class="form-control" type="text" id="firstName"  name="firstName" value="John" autofocus/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="lastName" class="form-label">Apellido</label>
                            <input class="form-control" type="text" name="lastName" id="lastName" value="Doe"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="email" class="form-label">Correo electrónico</label>
                            <input class="form-control" type="text" id="email" name="email" value="john.doe@example.com" placeholder="john.doe@example.com"/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="phoneNumber">Numero de telefono</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text">US (+1)</span>
                              <input type="text" id="phoneNumber" name="phoneNumber" class="form-control" placeholder="202 555 0111" />
                            </div>
                          </div> 
                          <div class="mb-3 col-md-6">
                            <label class="form-label" for="cedula">Número de cedula</label>
                            <div class="input-group input-group-merge">
                              <span class="input-group-text"></span>
                              <input type="text" id="cedula" name="cedula" class="form-control" placeholder="30654853" />
                            </div>
                          </div> 
                          <div class="mb-3 col-md-6">
                            <label for="direccion" class="form-label">Dirección</label>
                            <input class="form-control" type="text" name="direccion" id="addres" value=""/>
                          </div>
                          <div class="mb-3 col-md-6">
                            <label for="user" class="form-label">Usuario</label>
                            <input class="form-control" type="text" id="user" name="user" value="Usuario" placeholder="john.doe"/>
                          </div>
                          <div class="col mb-3">
                                  <label for="membresia" style="margin-bottom: 8px">Tipo de membresia</label>
                                    <select class="btn btn-light bg-white" name="membresia"  id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%; text-align:left;  border-color: #DEDEDE;" disabled>
                                        <option value="Disponible">membresia_tipo1</option>
                                        <option value="No disponible">membresia_tipo2</option>
                                    </select>
                                  </div>
                          <div class="mb-3 col-md-6">
                            <label for="password" class="form-label">contraseña</label>
                            <input class="form-control" type="password" id="password" name="password" value="" placeholder=""/>
                          </div>
                        </div><!--termina-->
                        <div class="mt-2">
                          <button type="submit" class="btn btn-primary me-2">Guardar cambios</button>
                          <button type="reset" class="btn btn-outline-secondary">Cancelar</button>
                        </div>
                      </form>
                    </div><!--/-->
              </div>
              <!--/content-->
            </div>
            <!--/content wraper-->
          </div>
       
      </div>
      

      <div class="layout-overlay layout-menu-toggle"></div>
    </div> 

    
    <script src="/NeoRestaurante/public/Scripts/personsAdmin.js"></script>
    <script src="/NeoRestaurante/public/Scripts/auth.js"></script>     
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