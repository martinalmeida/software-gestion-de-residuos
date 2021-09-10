<?php require_once "vistas/vista_superior.php"?>

<?php
    include("../gerente/conexion_bd.php");
    
    $query="SELECT * FROM clientes WHERE id_clientes=".$_GET['id_clientes'];
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
            <a class="collapse-item active" href="clientes.php"><i class="fas fa-users"></i>  Mis clientes</a>
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
              Inicio del contenido de la Página  y CONTAINER-FLUID 
        ------------------------------------------------------------------------------------------>

        <div class="container-fluid">

          <div class="card shadow mb-4">
            <div class="card-body">
 
                <div class="form-row">
                  <div class=" col-sm-12 col-md-12">
                    <h5 style="color: #217b1c; text-align: center;"><b>Generar Acta para el cliente <strong> <?php echo $registro["nombre"];?> </strong></b></h5>
                    <hr style="border-color: #76a03f">
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-sm-12 col-md-12">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active acta1" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Acta de Gestión de residuos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link acta1" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Acta de Gestión de planillas</a>
                      </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                        <form action="acta_insertar.php" method="POST" enctype="multipart/form-data">

                          <!--Sección 1 Collapse-->
                         
                            <div id="accordion">
                              <div class="card" role="tablist">
                                <div class="card-header" role="tab" id="heading1">
                                  <h5 class="mb-0">
                                    <a class="titulos_a" href="#collapse1" data-toggle="collapse" data-parent="#accordion">
                                    Logo
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                  <div class="card-body">

                                    <div class="form-row">
                                      <div class="col-sm-12 col-md-12 mt-3" style="text-align: center;">
                                          <?php 
                                            
                                            $query="SELECT logo_file FROM empresas WHERE nit=".$_SESSION["empresas_nit"];
                                            $resultado=mysqli_query($mysqli,$query);
                                            $consulta=mysqli_fetch_array($resultado);

                                            if ($consulta['logo_file']== null) {
                                              echo "Ningún Logo adjunto";
                                            }else{
                                              echo '<img src="'.$consulta['logo_file'].'" width="100" height="100">';
                                            } 

                                          ?>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                              <!--Sección 2 Collapse-->


                                <div class="card-header" role="tab" id="heading2">
                                  <h5 class="mb-0">
                                    <a class="titulos_a" href="#collapse2" data-toggle="collapse" data-parent="#accordion">
                                    Datos del Cliente
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse in">
                                  <div class="card-body">

                                    <div class="form-row mt-2">
                                      <div class="col-sm-12 col-md-12">
                                        <label class="color">Nombre del Acta <span class="rojo">*</span></label>
                                        <input type="text" name="nombre" placeholder="" class="form-control in-put" required>
                                      </div>

                                      <div class="col-sm-12 col-md-12">
                                        <label class="color">Descripción </label>
                                        <textarea class="form-control in-put" name="descripcion"></textarea>
                                      </div>
                                    </div>

                                    <div class="form-row mt-3">
                                      <div class="col-sm-12 col-md-3">
                                        <label class="color">Nombre del cliente <span class="rojo">*</span></label>
                                        <input type="text" name="nombre_cliente" value="<?php echo $registro["nombre"];?>" class="form-control in-put" required>
                                      </div>
                                      <div class="col-sm-12 col-md-3">
                                        <label class="color">NIT <span class="rojo">*</span></label>
                                        <input type="number" name="nit_cliente" value="<?php echo $registro["identificacion"];?>" class="form-control in-put" required>
                                      </div>
                                      <div class="col-sm-12 col-md-3">
                                        <label class="color">Dirección <span class="rojo">*</span></label>
                                        <input type="text" name="direccion" value="<?php echo $registro["direccion_admin"];?>" class="form-control in-put" required>
                                      </div>
                                      <div class="col-sm-12 col-md-3">
                                        <label class="color">Periodo <span class="rojo">*</span></label>
                                        <input type="text" name="periodo" placeholder="" class="form-control in-put" required>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                              <!--Sección 3 Collapse-->

                                <div class="card-header" role="tab" id="heading3">
                                  <h5 class="mb-0">
                                    <a class="titulos_a" href="#collapse3" data-toggle="collapse" data-parent="#accordion">
                                    Residuos recepcionados
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse in">
                                  <div class="card-body">

                                    <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="material" name="materialr[]" value="Material Absorbente" onchange="javascript:mat_abs()">
                                          <label for="material">Material Absorbente</label>
                                        </div>

                                        <div class="row" id="material_absorvente" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="materialr[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="materialr[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="plastico" name="plasticoc[]" value="Plástico contaminante" onchange="javascript:plasticos()">
                                          <label for="plastico">Plástico contaminante</label>
                                        </div>

                                        <div class="row" id="plastico_contaminante" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="plasticoc[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="plasticoc[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div> 
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="lodo" name="lodosa[]" value="Lodos Aceitosos" onchange="javascript:lodos()">
                                          <label for="lodo">Lodos Aceitosos</label>
                                        </div>

                                        <div class="row" id="lodos_aceitosos" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="lodosa[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="lodosa[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div> 
                                      </div>
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="carton" name="cartonc[]" value="Cartón contaminado" onchange="javascript:carton_c()">
                                          <label for="carton">Cartón contaminado</label>
                                        </div>

                                        <div class="row" id="carton_contaminado" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="cartonc[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="cartonc[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div> 
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="vidrio" name="vidrioc[]" value="Vidrio contaminado" onchange="javascript:vidrio_con()">
                                          <label for="vidrio">Vidrio contaminado</label>
                                        </div>

                                        <div class="row" id="vidrio_contaminado" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="vidrioc[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="vidrioc[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div> 
                                      </div>

                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="metal" name="metales[]" value="Metales (chatarra)" onchange="javascript:metales()">
                                          <label for="metal">Metales (chatarra)</label>
                                        </div>

                                        <div class="row" id="metales_chatarra" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="metales[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="metales[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="filtro" name="filtros[]" value="Filtros" onchange="javascript:filtros()">
                                          <label for="filtro">Filtros</label>
                                        </div>

                                        <div class="row" id="filtross" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="filtros[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="filtros[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="aceite" name="aceites[]" value="Aceites Industriales" onchange="javascript:aceites()">
                                          <label for="aceite">Aceites Industriales</label>
                                        </div>

                                        <div class="row" id="aceites_industriales" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="aceites[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="aceites[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="solvente" name="solventes[]" value="Solventes" onchange="javascript:solventes()">
                                          <label for="solvente">Solventes</label>
                                        </div>

                                        <div class="row" id="solventess" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="solventes[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="solventes[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="residuo_q" name="rquimico[]" value="Residuo Químico" onchange="javascript:residuos_quimicos()">
                                          <label for="residuo_q">Residuo Químico</label>
                                        </div>

                                        <div class="row" id="residuos" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="rquimico[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="rquimico[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="fluo" name="fluores[]" value="Fluorescentes" onchange="javascript:fluorecente()">
                                          <label for="fluo">Fluorescentes</label>
                                        </div>

                                        <div class="row" id="fluorecentes" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="fluores[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="fluores[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="bateria" name="baterias[]" value="Baterías" onchange="javascript:baterias()">
                                          <label for="bateria">Baterías</label>
                                        </div>

                                        <div class="row" id="bateriass" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="baterias[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="baterias[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>


                                    <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="pila" name="pilas[]" value="Pilas" onchange="javascript:pilas()">
                                          <label for="pila">Pilas</label>
                                        </div>

                                        <div class="row" id="pilass" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="pilas[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="pilas[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="resi" name="r_organico[]" value="Residuos Orgánicos" onchange="javascript:residuos_organicos()">
                                          <label for="resi">Residuos Orgánicos</label>
                                        </div>

                                        <div class="row" id="residuo_org" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="r_organico[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="r_organico[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="resio" name="r_ordinario[]" value="Residuos Ordinarios" onchange="javascript:residuos_ordinarios()">
                                          <label for="resio">Residuos Ordinarios</label>
                                        </div>

                                        <div class="row" id="residuos_ordinario" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="r_ordinario[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="r_ordinario[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="resicl" name="r_reciclable[]" value="Residuos Reciclables" onchange="javascript:residuos_reciclables()">
                                          <label for="resicl">Residuos Reciclables</label>
                                        </div>

                                        <div class="row" id="residuo_reciclable" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="r_reciclable[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="r_reciclable[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="resipun" name="r_cortopun[]" value="Residuos Cortopunzantes" onchange="javascript:residuos_cortopunzantes()">
                                          <label for="resipun">Residuos Cortopunzantes</label>
                                        </div>

                                        <div class="row" id="residuo_cortopunzante" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="r_cortopun[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="r_cortopun[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="epp" name="epps[]" value="EPPS" onchange="javascript:epps()">
                                          <label for="epp">EPPS</label>
                                        </div>

                                        <div class="row" id="eppss" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="epps[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="epps[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>

                                    <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="otr" onchange="javascript:otros()">
                                          <label for="otr">Otros</label>
                                        </div>

                                        <div class="row" id="otro" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Nombre </label>
                                              <input type="text" name="otros1[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="otros1[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="otros1[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="row">
                                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                        <div class="form-check sel-residuos">
                                          <input type="checkbox" id="otr2"  onchange="javascript:otros2()">
                                          <label for="otr2">Otros</label>
                                        </div>

                                        <div class="row" id="otro2" style="display: none;">
                                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Nombre </label>
                                              <input type="text" name="otros2[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Cantidad </label>
                                              <input type="number" name="otros2[]" placeholder="" class="form-control in-put">
                                            </div>
                                          </div>
                                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                            <div class="input-info">
                                              <label style="color: #76a03f;">Métrica </label>
                                              <select class="custom-select in-put" name="otros2[]">
                                                <option value=""></option>
                                                <?php 
                                                
                                                $consulta="SELECT abreviacion FROM metricas WHERE nit=".$_SESSION["empresas_nit"];
                                                $ejecutar=mysqli_query($mysqli,$consulta) OR die (mysqli_error($mysqli))
                                                ?>


                                                <?php foreach ($ejecutar as $opciones):?>

                                                  <option value="<?php echo $opciones['abreviacion']?> "><?php echo $opciones['abreviacion']?></option>

                                                <?php endforeach ?>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>


                              <!--Sección 4 Collapse-->

                                <div class="card-header" role="tab" id="heading4">
                                  <h5 class="mb-0">
                                    <a class="titulos_a" href="#collapse4" data-toggle="collapse" data-parent="#accordion">
                                    Información adicional
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse in">
                                  <div class="card-body">
                                    <div class="form-group">
                                       <textarea id="editor" name="info_adicional"></textarea>
                                    </div>
                                  </div>
                                </div>

                              <!--Sección 5 Collapse-->

                                <div class="card-header" role="tab" id="heading5">
                                  <h5 class="mb-0">
                                    <a class="titulos_a" href="#collapse5" data-toggle="collapse" data-parent="#accordion">
                                    Firma
                                    </a>
                                  </h5>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse in">
                                  <div class="card-body">
                                    <div class="row">
                                      <div class="col-sm-12 col-md-6"> 
                                        <label class="color">Cargar firma (PNG, JPG, JPEG) Maximo 3MB</label>
                                        <div class="custom-file">
                                          <input onchange="firma_actas(this)" type="file" id="firma_acta" name="acta_firma"  class="custom-file-input" accept="image/x-png,image/jpg,image/jpeg" />                   
                                          <label id="lblArchivo" class="custom-file-label firmatxt_acta" for="firma_acta"></label> 
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>

                                <input type="hidden" name="nit" value="<?php echo $_SESSION["empresas_nit"];  ?>">

                                
                              </div>
                            </div> 
                            <div class="form-row mt-4">
                              <div class="col-sm-12 col-md-12 text-center">
                                <button type="submit" class="botonreg">Generar Acta</button>
                              </div>
                            </div>
                        </form>
                      </div>
                      <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">Actas de gestión de planillas</div>
                    </div>
                  </div>
                </div>


            </div>
          </div>

        </div>

        <!---------------------------------------------------------------------------------------- 
              FIN del contenido de la Página  y CONTAINER-FLUID 
        ------------------------------------------------------------------------------------------>
        </div>

        

        <?php require_once "vistas/vista_inferior.php"?>


        <script>

          tinymce.init({
            selector: 'textarea#editor',
            menubar: false
          });

        </script>
</body>

</html>
