<?php require_once "vistas/vista_superior.php"?>



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
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-building"></i>
          <span>Gestión organizacional</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tablas:</h6>
            <a class="collapse-item" style="" href="clientes.php"><i class="fas fa-users"></i>  Mis clientes</a>
            <a class="collapse-item" href="proveedores.php"><i class="fas fa-truck-moving"></i>  Mis proveedores</a>
            <a class="collapse-item" href="sucursales.php"><i class="fas fa-map-marked-alt"></i>  Sucursales</a>
            <a class="collapse-item" href="zonas.php"><i class="fas fa-thumbtack"></i>  Zonas</a>
            <a class="collapse-item" href="vehiculos.php"><i class="fas fa-car"></i>  Mis Vehículos</a>
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
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
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

            <?php
              include("../gerente/conexion_bd.php");
              
              $query="SELECT * FROM alertas WHERE nit=".$_SESSION["empresas_nit"];
              $resultado=mysqli_query($mysqli,$query);
              $registro=mysqli_fetch_array($resultado);

              $noti = "";
              $fechaActual = date('Y-m-d');

              if ($registro != null) {
                  if ($fechaActual >= $registro['v_tecnomecanica'] AND $registro['nit'] == $_SESSION["empresas_nit"]) {
                    $noti = "❕";
                  }else if ($fechaActual >= $registro['v_soat'] AND $registro['nit'] == $_SESSION["empresas_nit"]){
                    $noti = "❕";
                  }elseif ($fechaActual >= $registro['v_c_sanitarios'] AND $registro['nit'] == $_SESSION["empresas_nit"]) {
                    $noti = "❕";
                  }else{
                    $noti = "";
                  }  
              }else{

              }

            ?>

            <!-- Nav Item - Alertas -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                                <!-- Contador - Alertas -->
                <span class="badge badge-danger badge-counter"><?php echo $noti; ?></span>
              </a>

              <!-- Dropdown - Alertas -->
                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in barra_noti" style="overflow-y: scroll;  height: 360px;" 
                    aria-labelledby="alertsDropdown">
                    <h6 class="dropdown-header">
                        Centro de Alertas
                    </h6>

                  <!-- Alertas Vencimiento Tecnomecanica -->
              
                  <?php
                    $query2="SELECT * FROM alertas WHERE nit=".$_SESSION["empresas_nit"];
                    $resultado2=mysqli_query($mysqli,$query2);
                    while ($registro2=mysqli_fetch_array($resultado2)) { 
                      $fechaActual = date('Y-m-d');
                      if ($fechaActual >= $registro2['v_tecnomecanica'] AND $registro2['nit'] == $_SESSION["empresas_nit"]) {
                      ?>
                        <a class="dropdown-item d-flex align-items-center" href="vehiculos.php">
                            <div class="mr-3">
                                <div class="icon-circle bg-light">
                                    <i class="fas fa-truck"></i>
                                </div>
                            </div>
                            <div>
                              <?php $fechaActual2 = date('d-m-Y'); ?>
                                <div class="small text-gray-500"><?php echo $fechaActual2; ?></div>
                                La <b>Tecnomecánica</b> de su vehículo con placa <b><?php echo $registro2['placa'] ?></b> se ha vencido. 
                            </div>
                        </a> 
                      
                  <?php }else{

                  }


                   if($fechaActual >= $registro2['v_soat'] AND $registro2['nit'] == $_SESSION["empresas_nit"]){ ?>

                        <a class="dropdown-item d-flex align-items-center" href="vehiculos.php">
                            <div class="mr-3">
                                <div class="icon-circle bg-light">
                                    <i class="fas fa-id-card"></i>
                                </div>
                            </div>
                            <div>
                                <?php $fechaActual2 = date('d-m-Y'); ?>
                                <div class="small text-gray-500"><?php echo $fechaActual2; ?></div>
                                El <b>SOAT</b> del vehículo con placa <b><?php echo $registro2['placa'] ?></b> se ha vencido. 
                            </div>
                        </a> 
                    
                  <?php  }else{

                  }

                  if ($fechaActual >= $registro2['v_c_sanitarios'] AND $registro2['nit'] == $_SESSION["empresas_nit"]) { ?>

                        <a class="dropdown-item d-flex align-items-center" href="vehiculos.php">
                            <div class="mr-3">
                                <div class="icon-circle bg-light">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                            </div>
                            <div>
                                <?php $fechaActual2 = date('d-m-Y'); ?>
                                <div class="small text-gray-500"><?php echo $fechaActual2; ?></div>
                                Los <b>Certificados sanitarios</b> de su vehículo con placa <b><?php echo $registro2['placa'] ?></b> se han vencido.
                            </div>
                        </a> 
                    
                  <?php  }else{ ?>

                  <?php  } ?>  
                   
                  <?php  } ?>
                  <a class="dropdown-item text-center small text-gray-500">Ninguna notificación</a>
                </div>
            </li>



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

        <!-- Contenido de la Pagina -->
        <div class="container-fluid">
          <!-- Page Heading -->
          <div class="row">
            <div class="col-xs-12 col-md-4">
              <div class="small-box bg-success1 animated bounceInLeft">
                  <div class="inner text-white pa">
                    <h3>
                      <?php             
                        $sql = "SELECT COUNT(*) total FROM actas WHERE nit=".$_SESSION["empresas_nit"];
                        $result = mysqli_query($mysqli, $sql);
                        $fila = mysqli_fetch_assoc($result);
                        if ($fila['total'] == 0) {
                          echo '<a style="color: #34495e;">0</a>';
                        }else{
                          $resta = ($fila['total']-1);
                          echo '<a style="color: #34495e;">'.$resta.'</a>';
                        }
                        ?> 
                    </h3>

                    <p style="color: #34495e;"><strong>Mis Manifiestos</strong></p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-file-alt" style="color: rgba(52,73,94); font-size: 60px;"></i>
                  </div>
                  <a href="actas_tabla.php" class="small-box-footer">Detalles <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-xs-12 col-md-4">
              <div class="small-box bg-success1 animated bounceInLeft">
                  <div class="inner text-white pa">
                    <h3>
                      <?php             
                        $sql = "SELECT COUNT(*) total FROM usuarios WHERE empresas_nit=".$_SESSION["empresas_nit"];
                        $result = mysqli_query($mysqli, $sql);
                        $fila = mysqli_fetch_assoc($result);
                        echo '<a style="color: #16a086;">'.$fila['total'].'</a>';
                        ?> 
                    </h3>

                    <p style="color: #16a086;"><strong>Usuarios Registrados</strong></p>
                  </div>
                  <div class="icon">
                    <i class="fas fa-users" style="color: rgba(22,160,134)"></i>
                  </div>
                  <a href="usuarios.php" class="small-box-footer detalle">Detalles <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>

            <div class="col-xs-12 col-md-4">
                <div class="contenedor1 animated bounceInLeft">
                  <div class="widget">
                    <div class="reloj">
                      <p id="horas" class="horas"></p>
                      <p>:</p>
                      <p id="minutos" class="minutos"></p>
                      <p>:</p>
                      <div class="cajaSegundos">
                        <p id="ampm" class="ampm"></p>
                        <p id="segundos" class="segundos"></p>
                      </div>
                    </div>
                    <div class="fecha">
                      <p id="diaSemana" class="diaSemana"></p>
                      <p id="dia" class="dia"></p>
                      <p>de</p>
                      <p id="mes" class="mes"></p>
                      <p>del</p>
                      <p id="anio" class="anio"></p>
                    </div>
                  </div>
                </div>
              </div>
          </div>

          
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php require_once "vistas/vista_inferior.php"?>
</body>

</html>
