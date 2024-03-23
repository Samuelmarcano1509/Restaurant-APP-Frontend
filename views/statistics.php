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

    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Helpers -->
    <script src="/NeoRestaurante/public/vendor/js/helpers.js"></script>
    <script src="/NeoRestaurante/public/vendor/js/config.js"></script>
</head>
<body onload="authValidation()">
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
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                </div>
              </div>
      
            
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      usuario
                    <img src="/NeoRestaurante/public/vendor/libs/js/fontawesome-free-6.5.1-web/svgs/solid/user.svg" alt class="w-px-30 h-auto rounded-circle" /> <!--avatar-->
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item">
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
          <div class="" role="main">
              <!-- top tiles -->
              <div class="row" style="display: inline-block; margin-left:10%; width: 80%;" >
                <div class="tile_count">
                  <div class="col-md-4 col-sm-6  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total de ventas</span>
                    <div class="count">0</div>
                    <span class="count_bottom"><i class=""> </i> </span>
                  </div>
                  <div class="col-md-4 col-sm-6  tile_stats_count">
                    <span class="count_top"><i class="fa fa-clock-o"></i> Total de pedidos</span>
                    <div class="count">0</div>
                    <span class="count_bottom"><i class=""><i class="fa fa-sort-asc"></i> </i> </span>
                  </div>
                  <div class="col-md-4 col-sm-6  tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Total de reservaciones</span>
                    <div class="count ">0</div>
                    <span class="count_bottom"><i class=""><i class="fa fa-sort-asc"></i></i> </span>
                  </div>
                </div>
            </div>
          
            <!--Grafica1-->
            <div class="row x_title">
              <div class="col-md-6">
                 <h3>Periodo Mensual</h3>
              </div>
            </div>
            <div class="col-md-6 col-sm-6">
               <div id="chart_plot_01" class="demo-placeholder"></div>
            </div>
           <!--/Grafica1--> 
           <!--Grafica3-->
           <div class="col-md-5 col-sm-5">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Periodo Anual</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="canvasDoughnut"></canvas>
                  </div>
                </div>
              </div>
               <!--/Grafica3-->
          
          <!--Grafica2-->
          <div style="margin-top:30%;">
            <div class="col-md-6 col-sm-6">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Periodo Semestral</h2>
                  </div>
                  <div class="x_content">
                    <canvas id="lineChart"></canvas>
                  </div>
                </div>
          </div>
           <!--/Grafica2-->
           <!--Grafica4-->
           <div class="col-md-6 col-sm-6  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Periodo trimestral</h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <canvas id="mybarChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
           <!--/Grafica4-->
        </div>
    <script src="/NeoRestaurante/public/vendor/js/bootstrap copy.js"></script>
    <script src="/NeoRestaurante/public/vendor/js/menu.js"></script>
    <script src="/NeoRestaurante/public/vendor/js/main.js"></script>
    <script src="/NeoRestaurante/public/vendor/js/dashboards-analytics.js"></script>
    <script src="/NeoRestaurante/public/Scripts/auth.js"></script>
    <script src="/NeoRestaurante/public/vendor/libs/js/apex-charts/apexcharts.js"></script>
    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>