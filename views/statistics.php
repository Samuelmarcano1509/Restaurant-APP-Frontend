<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estadisticas</title>
    <link rel="shortcut icon" href="../public/img/icon.ico">
    <link rel="stylesheet" href="/NeoRestaurante/public/vendor/css/fonts/boxicons.css" />


    <!-- Core CSS -->
   
    <!-- Core CSS -->
   <!-- Core CSS -->
   <link rel="stylesheet" href="/NeoRestaurante/vendors/sweetAlert2/sweetalert2.min.css">
    <link rel="stylesheet" href="/NeoRestaurante/vendors/animate.css/animate.min.css"> 
    <link href="../build/css/custom.min.css" rel="stylesheet"> 

    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
   

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>

    <style>
      body{
        background-color:#F2F2F2;
      }
      .tile_count{
        color:black;
      }
    </style>
</head>
<body onload="dataAdmin()">
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
            <li class="menu-item active open">
              <a href="/NeoRestaurante/views/statistics.php" class="menu-link">
              <!--  <i class="menu-icon tf-icons bx bx-home-circle"></i>--> <!--icono al lado de la seccion-->
                <div data-i18n="Analytics">Estadisticas</div>
              </a>
            </li>
            <li class="menu-item ">
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
                <div style="margin-top: 5px" id="user">User</div>
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                    <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/user.svg" alt class="w-px-30 h-auto rounded-circle" /> <!--avatar-->
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" onclick="closeSesion()">
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
          <div class="" role="main">
              <!-- top tiles -->
             
            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-lg-8 mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body"><!--primer modal-->
                          <h5 class="card-title text-primary">Bienvenido "ADMIN"! 🎉</h5>
                          <p class="mb-3" style="font-size: 18px">
                            Aca tienes <span class="fw-bold">Todos</span> los datos indispensables para administrar las ventas en los
                             distintos periodos
                          </p>
                        </div>
                        <div class="tile_count" style="font-size: 15px">
                              <div class="col tile_stats_count">
                                <span style="font-size: 18px">Total de ventas<div class="count" id="ventasT" style="font-size: 14px;">0</div> </span>
                              </div>
                            </div>
                      </div>
                    </div>
                  </div>
                </div><!--/primer modal-->
                <!--grafica1-->
                <div class="col-12 col-lg-8 order-2 order-md-3 order-lg-2 mb-4">
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-md-8">
                        <h5 class="card-header m-0 me-2 pb-3">Ventas Periodo Semestral</h5>
                        <div id="totalRevenueChart" class="px-2"></div>
                      </div>
                      <div class="col-md-4">
                        <div class="card-body">
                        </div>
                        <div id="growthChart" style="margin-top: 15%;"></div>
                        <div class="text-center fw-semibold pt-3 mb-2">Porcentaje de Membresía </div>

                        <div class="d-flex px-xxl-4 px-lg-2 p-4 gap-xxl-3 gap-lg-1 gap-3 justify-content-between">
                          <div class="d-flex">
                            <div class="me-2">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                        <!--grafica2-->
                <div class="col-md-6 col-lg-4 col-xl-4  mb-4">
                  <div class="card">
                    <div class="card-header d-flex align-items-center pb-0">
                      <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Ventas Por Mes</h5>
                         <div class="d-flex  align-items-center mb-3">
                          <div class="row">
                          <div id="orderStatisticsChart" class="col mb-3"></div>
                          <p style="font-size:220%; margin-top: 20%;" class="col mb-3"><b id="bestMonth"></b></p>
                          </div>
                      </div> 
                      </div>
                  </div>
                </div>
              </div>
              <!--Grafica3-->
             <div class="col-md-6 col-lg-4 order-1 mb-4">
                  <div class="card h-100">
                    <div class="card-body px-0">
                      <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                          <div class="d-flex p-4 pt-3">
                            <div style="font-size: 200%">
                              <b>Porcentaje de ventas trimestral</b>
                            </div>
                          </div>
                          <div id="incomeChart"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
             </div>
             
             <div class="layout-overlay layout-menu-toggle"></div>
    </div>                   
          
    <script src="/NeoRestaurante/public/Scripts/personsAdmin.js"></script>
    <script src="../public/Scripts/datosadmin.js"></script>
    <script src="/NeoRestaurante/public/Scripts/auth.js"></script>     
    <script src="/NeoRestaurante/vendors/sweetAlert2/popper.min.js"></script>
    <script src="/NeoRestaurante/vendors/sweetAlert2/sweetalert2.all.min.js"></script>
    
   
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
   

    <script src="../assets/vendor/js/menu.js"></script>
   
    

    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

      <!-- Main JS -->
      <script src="../assets/js/main.js"></script>

      <!-- Page JS -->
      <script src="../assets/js/dashboards-analytics.js"></script>
      <script src="../public/Scripts/closeSesion.js"></script>
   
  </body>
</html>