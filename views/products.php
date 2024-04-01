<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
    <link rel="shortcut icon" href="../public/img/icon.ico">
    <link rel="stylesheet" href="/NeoRestaurante/public/vendor/css/fonts/boxicons.css" />


    <!-- Core CSS -->
    <link rel="stylesheet" href="/NeoRestaurante/public/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="/NeoRestaurante/public/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="/NeoRestaurante/public/css/demo.css" />

  
    <link rel="stylesheet" href="/NeoRestaurante/vendors/sweetAlert2/sweetalert2.all.min.css">  
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
    </style>
      <script src="/NeoRestaurante/public/vendor/js/jquery.js"></script>
      <link rel="stylesheet" href="/NeoRestaurante/public/vendor/css/css.css">
      <script src="/NeoRestaurante/public/vendor/js/js.js"></script>


</head>
<body onload="productList(); dataAdmin();">
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
            <li class="menu-item active open">
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
                      <a class="dropdown-item"  onclick="closeSesion();">
                      <span id="casocerrado"  >Cerrar sesion</span>
                     
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
                <h5 class="card-header">Listado de productos<button type="button" class="btn btn-secondary" style="margin-left:59%;" data-bs-toggle="modal" data-bs-target="#modalCenter2" >Agregar producto</button> </h5>
                <div class="tablita">
                <div class="table-responsive text-nowrap"> 
                  <table class="table" style="width: 100%" id="table_products">
                    <thead>
                      <tr">
                        <th style="width: 12%;">Nombre</th>
                        <th style="width: 43%">Descripción</th>
                        <th style="width: 5%;">Precio</th>
                        <th style="width: 20%">Categoría</th>
                        <th style="width: 10%;">Estado</th>
                        <th style="width: 10%;">Acciones</th>
                      </tr>
                    </thead>
                    <tbody id="inf-body" class="table-border-bottom-0">
                    </tbody>
                  </table>
                </div>
              </div>
           </div>
        </div>
      </div>

      <div class="layout-overlay layout-menu-toggle"></div>
    </div> 
<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel"><b>Advertencia</b></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>¿Esta seguro que desea eliminar este producto?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button onclick="sendProductDelete()" type="button" id="borrar"class="btn btn-danger" data-bs-dismiss="modal">Eliminar</button>
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
                                <h5 class="modal-title" id="modalCenterTitle"><b>Editar Producto</b></h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body"><!--comienza-->
                            <form id="formulario">
                              <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Nombre</label>
                                    <input type="text" id="nombre"  name="nombre" class="form-control"  placeholder="Ingresa el nombre"  />
                                  </div>
                                  <div class="col mb-3">
                                    <label for="descripcion" class="form-label">Descripción</label>
                                    <input type="text" id="descripcion"  name="descripcion" class="form-control"  placeholder="Ingresa la descripción"/>
                                  </div>
                                </div>
                                <div class="row">
                                <div class="col mb-3">
                                    <label for="descripcion" class="form-label">Precio</label>
                                    <input type="text" id="precio"  name="precio" class="form-control"  placeholder="Ingresa el precio"/>
                                  </div>
                                  <div class="col mb-3">
                                    <label for="descripcion" class="form-label">Categoría</label>
                                    <input type="text" id="categoria"  name="categoria" class="form-control"  placeholder="Ingresa la categoría"/>
                                  </div>
                                  <div class="col mb-3">
                                  <label for="estado" style="margin-bottom: 8px">Estado</label>
                                    <select class="btn btn-light bg-white" name="estado"  id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%; text-align:left;  border-color: #DEDEDE;" >
                                        <option value="Disponible">Disponible</option>
                                        <option value="No disponible">No disponible</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="row g-2"></div>
                                <!--aqui-->
                                <div class="card-body">
                                 <div class="d-flex align-items-start align-items-sm-center gap-4">
                                  <img src=""  alt="#producto"  class="d-block rounded" 
                                   height="100"  width="100"  id="uploadedAvatar"/>
                                  <div class="button-wrapper">
                                    <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                      <span class="d-none d-sm-block">Asignar imagen</span>
                                      <input  type="file"  id="upload" name="foto" class="account-file-input"
                                      hidden accept="image/png, image/jpeg"/>
                                    </label>
                                  </div>
                                </div>
                                <script>
                                  const uploadedAvatar = document.getElementById('uploadedAvatar');
                                  const uploadInput = document.getElementById('upload');

                                  uploadInput.addEventListener('change', function() {
                                    if (this.files && this.files[0]) {
                                      const reader = new FileReader();

                                      reader.onload = function() {
                                        uploadedAvatar.src = reader.result;
                                      };

                                      reader.readAsDataURL(this.files[0]);
                                    }
                                  });
                                </script>

                                <!--acaba-->
                              </div><!--termina-->  
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button onclick="editProduct()" id="send" type="button" class="btn btn-primary" data-bs-dismiss="modal">Guardar cambios</button>
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
                                <h5 class="modal-title" id="modalCenterTitle">Agregar Producto</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body"><!--comienza-->
                            <form id="formulario2">
                              <div class="row">
                                  <div class="col mb-3">
                                    <label for="nameWithTitle" class="form-label">Nombre</label>
                                    <input type="text" name="nombre"id="nameWithTitle"  class="form-control"  placeholder="Ingresa el nombre"  />
                                  </div>
                                  <div class="col mb-3">
                                    <label for="descripcion" class="form-label">Descripción</label>
                                    <input type="text" name="descripcion"id="descripcion"  class="form-control"  placeholder="Ingresa la descripción"/>
                                  </div>
                                </div>
                                <div class="row">
                                <div class="col mb-3">
                                    <label for="descripcion" class="form-label">Precio</label>
                                    <input type="text" name="precio"id="descripcion"  class="form-control"  placeholder="Ingresa el precio"/>
                                  </div>
                                  <div class="col mb-3">
                                    <label for="descripcion" class="form-label">Categoría</label>
                                    <input type="text" name="categoria"id="descripcion"  class="form-control"  placeholder="Ingresa la categoría"/>
                                  </div>
                                  <div class="col mb-3">
                                  <label for="estado" style="margin-bottom: 8px">Estado</label>
                                    <select class="btn btn-light bg-white" name="estado"  id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%; text-align:left;  border-color: #DEDEDE;" >
                                        <option><a>Disponible</a></option>
                                        <option><a>No disponible</a></option>
                                    </select>
                                  </div>
                                </div>
                                
                                <!--aqui-->
                              
                                </div>
                               
                                <!--acaba-->
                              <!--termina-->  
                              <div class="modal-footer">
                                <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cerrar</button>
                                <button onclick="createProduct()" type="button" class="btn btn-primary" data-bs-dismiss="modal">Guardar cambios</button>
                              </div>
                            </div>
                          </form> 
                          </div>
                        </div>
                      </div>
                    </div>



                    <script src="../public/Scripts/datosadmin.js"></script>
    <script src="/NeoRestaurante/vendors/sweetAlert2/popper.min.js"></script>
    <script src="/NeoRestaurante/vendors/sweetAlert2/sweetalert2.all.min.js"></script>               
    <script src="/NeoRestaurante/public/vendor/js/bootstrap copy.js"></script>
    <script src="/NeoRestaurante/public/vendor/js/menu.js"></script>
    <script src="/NeoRestaurante/public/vendor/js/main.js"></script>
    <script src="/NeoRestaurante/public/Scripts/auth.js"></script>
    <script src="../public/Scripts/closeSesionAdmin.js"></script>
    <script src="../public/Scripts/productList.js"></script>
   

  </body>
</html>