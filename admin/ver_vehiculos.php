<?php require_once "vistas/vista_superior.php"?>

<?php
    include("../gerente/conexion_bd.php");
    $query="SELECT * FROM vehiculos WHERE id_vehiculo=".$_GET['id_vehiculo'];
    $resultado=mysqli_query($mysqli,$query);
    $registro=mysqli_fetch_array($resultado); 
?>


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-lightbulb"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Fundación ECOTEC</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-home"></i>
          <span>Inicio</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Usuarios
      </div>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="perfil.php">
          <i class="fas fa-user"></i>
          <span>Perfil (Mi negocio)</span></a>
      </li>

       <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="usuarios.php">
          <i class="fas fa-user-friends"></i>
          <span>Mis Usuarios</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Heading -->
      <div class="sidebar-heading">
        Registros
      </div>
      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-building"></i>
          <span>Gestión organizacional</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tablas:</h6>
            <a class="collapse-item" style="" href="clientes.php"><i class="fas fa-users"></i>  Mis clientes</a>
            <a class="collapse-item" href="proveedores.php"><i class="fas fa-truck-moving"></i>  Mis proveedores</a>
            <a class="collapse-item" href="sucursales.php"><i class="fas fa-map-marked-alt"></i>  Sucursales</a>
            <a class="collapse-item" href="zonas.php"><i class="fas fa-thumbtack"></i>  Zonas</a>
            <a class="collapse-item active" href="vehiculos.php"><i class="fas fa-car"></i>  Mis Vehículos</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-truck"></i>
          <span>Gestión operacional</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tablas:</h6>
            <a class="collapse-item" href="unidades_negocio.php"><i class="far fa-handshake"></i>  Unidades de negocio</a>
            <a class="collapse-item" href="lineas_servicio.php"><i class="fas fa-file-signature"></i>  Lineas de servicio</a>
            <a class="collapse-item" href="esp_adicionales.php"><i class="fas fa-file-contract"></i>   Esp. adicionales</a>
            <a class="collapse-item" href="chequeos.php"><i class="far fa-file-alt"></i>   Chequeos</a>
            <a class="collapse-item" href="estados_recorrido.php"><i class="fas fa-road"></i>   Estados del recorrido</a>
          </div>
        </div>
      </li>

            <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-recycle"></i>
          <span>Gestión de residuos</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tablas:</h6>
            <a class="collapse-item" href="metricas.php"><i class="fas fa-ruler-combined"></i>  Métricas</a>
            <a class="collapse-item" href="riesgos.php"><i class="fas fa-skull-crossbones"></i>  Riesgos</a>
            <a class="collapse-item" href="disposicion.php"><i class="fas fa-trash-alt"></i>  Disposición / Manejo</a>
            <a class="collapse-item" href="residuos_generales.php"><i class="fas fa-dumpster"></i>  Residuos generales</a>
          </div>
        </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>

    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

      

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small limitado"><?php echo $_SESSION["nombre"];?></span>
                <i class="fas fa-angle-down"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="perfil.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Perfil
                </a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Cerrar Sesión
                </a>
              </div>
            </li>


          </ul>

        </nav>
        <!-- End of Topbar -->

        <!---------------------------------------------------------------------------------------- 
              Inicio del contenido de la Página de REGISTRO DE EMPRESAS y CONTAINER-FLUID 
        ------------------------------------------------------------------------------------------>

        <div class="container-fluid">

          <div class="card shadow mb-4">
            <div class="card-body">
              <form class="formulario-empresa" id="register_vehiculos" action="" method="POST" enctype="multipart/form-data">

                <div class="form-row">
                  <div class=" col-sm-12 col-md-12">
                    <h5 style="color: #217b1c"><b>Consulta vehiculo con placa: <strong> <?php echo $registro["placa"];?> </strong></b></h5>
                    <hr style="border-color: #76a03f">
                  </div>
                </div>

                <div class="form-row mt-2">
                  <div class="col-sm-12 col-md-6">
                    <label class="color">Marca <span class="rojo">*</span></label>
                    <input type="text" name="marca" placeholder="Nombre de la marca" class="form-control in-put" value="<?php echo $registro['marca']; ?>" disabled required>
                  </div>

                  <div class="col-sm-12 col-md-4">
                    <label class="color">Capacidad <span class="rojo">*</span></label>
                    <input type="text" name="capacidad" placeholder="Capacidad de carga" class="form-control in-put" value="<?php echo $registro['capacidad']; ?>" disabled required>
                  </div>

                  <div class="col-sm-12 col-md-2">
                    <label class="color">Metrica <span class="rojo">*</span></label>
                    <select class="custom-select in-put" name="metrica" disabled required>
                      <option value="<?php echo $registro['metrica']; ?>"><?php echo $registro['metrica']; ?></option>
                      <option value=""></option>
                      <option value=""></option>
                    </select>
                  </div>
                </div>

                <div class="form-row mt-4">
                  <div class="col-sm-12 col-md-6">
                    <label class="color">Placa <span class="rojo">*</span></label>
                    <input type="text" name="placa" placeholder="Placa del vehículo" class="form-control in-put" value="<?php echo $registro['placa']; ?>" disabled required>
                  </div>

                  <div class="col-sm-12 col-md-6">
                    <label class="color">Modelo </label>
                    <input type="text" name="modelo" placeholder="Indique el año Ej: 2017" class="form-control in-put" value="<?php echo $registro['modelo']; ?>" disabled>
                  </div>
                </div>

                <div class="form-row mt-4">
                  <div class="col-sm-12 col-md-6">
                    <label class="color">Color </label>
                    <input type="text" name="color" placeholder="Indique el color" class="form-control in-put" value="<?php echo $registro['color']; ?>" disabled>
                  </div>

                  <div class="col-sm-12 col-md-6">
                    <label class="color">Tipo de vehículo <span class="rojo">*</span></label>
                    <input type="text" name="tipo" placeholder="Ej: Camión tipo furgon" class="form-control in-put" value="<?php echo $registro['tipo_vehiculo']; ?>" disabled required>
                  </div>
                </div>

                <div class="form-row mt-4">
                  <div class="col-sm-12 col-md-4">
                    <label class="color">Proveedor </label>
                    <select class="custom-select in-put" name="proveedor" disabled>
                      <option value="<?php echo $registro['proveedor']; ?>"><?php echo $registro['proveedor']; ?></option>
                      <option value=""></option>
                      <option value=""></option>
                    </select>
                  </div>

                  <div class="col-sm-12 col-md-4">
                    <label class="color">Propietario </label>
                    <input type="text" name="propietario" placeholder="Nombre del propietario" class="form-control in-put" value="<?php echo $registro['propietario']; ?>" disabled>
                  </div>

                  <div class="col-sm-12 col-md-4">
                    <label class="color">Identificación del propietario </label>
                    <input type="text" name="identificacion_pro" placeholder="" class="form-control in-put" value="<?php echo $registro['ident_propietario']; ?>" disabled>
                  </div>
                </div>

                <div class="form-row mt-4">
                  <div class="col-sm-12 col-md-6">
                    <label class="color">N. Tecnomecanica </label>
                    <input type="text" name="tecnomecanica" placeholder="Número Tecnomecanica" class="form-control in-put" value="<?php echo $registro['num_tecno']; ?>" disabled>
                  </div>

                  <div class="col-sm-12 col-md-6">
                    <label class="color">Fecha vencimiento Tecnomecanica </label>
                    <input type="date" name="fecha_venc" placeholder="" class="form-control in-put" value="<?php echo $registro['fecha_v_tecno']; ?>" disabled>
                  </div>
                </div>

                <div class="form-row mt-4">
                  <div class="col-sm-12 col-md-6">
                    <label class="color">N. SOAT </label>
                    <input type="text" name="soat" placeholder="Número SOAT" class="form-control in-put" value="<?php echo $registro['num_soat']; ?>" disabled>
                  </div>

                  <div class="col-sm-12 col-md-6">
                    <label class="color">Fecha vencimiento SOAT </label>
                    <input type="date" name="venc_soat" placeholder="" class="form-control in-put" value="<?php echo $registro['fecha_v_soat']; ?>" disabled>
                  </div>
                </div>

                <div class="form-row mt-3">
                  <div class=" col-sm-12 col-md-6">
                    <label class="color">Fecha vencimiento de certificados sanitarios </label>
                    <input type="date" name="venc_sanitario" placeholder="" class="form-control in-put" value="<?php echo $registro['fecha_v_csanitarios']; ?>" disabled>
                  </div>
                </div>

                <input type="hidden" name="id" value="<?php echo $_SESSION["id_user"];  ?>">
                <input type="hidden" name="nit" value="<?php echo $_SESSION["empresas_nit"];  ?>">

                <div class="form-row mt-4">
                  <div class="col-sm-12 col-md-12 text-center">
                    <button type="submit" class="botonreg">Guardar</button>
                    <button type="button" onClick="location.href='vehiculos.php'" class="botoncan">Cancelar</button>
                  </div>
                </div>

              </form>
            </div>
          </div>

        </div>

        <!---------------------------------------------------------------------------------------- 
              FIN del contenido de la Página de REGISTRO DE EMPRESAS y CONTAINER-FLUID 
        ------------------------------------------------------------------------------------------>

      </div>
      <!-- End of Main Content -->

      <?php require_once "vistas/vista_inferior.php"?> 

</body>

</html>
