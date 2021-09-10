<?php require_once "vistas/vista_superior.php"?>

<?php
    include("../gerente/conexion_bd.php");
    $query="SELECT * FROM actas WHERE id=".$_GET['id'];
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
              <form action="acta_update.php" method="POST" enctype="multipart/form-data">

                <div id="accordion">
                  <div class="card" role="tablist">
                    <div class="card-header" role="tab" id="heading1">
                      <h5 class="mb-0">
                        <a class="titulos_a" href="#collapse1" data-toggle="collapse" data-parent="#accordion">
                        Logo
                        </a>
                      </h5>
                    </div>
                    <div id="collapse1" class="panel-collapse collapse in show">
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
                    <div id="collapse2" class="panel-collapse collapse in show">
                                  <div class="card-body">

                                    <div class="form-row mt-2">
                                      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <label class="color">Ciudad: <span class="rojo">*</span></label>
                                        <input type="text" name="ciudad" value="<?php echo $registro["ciudad"];?>"  class="form-control in-put" required>
                                      </div>
                                      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <label class="color">Fecha: <span class="rojo">*</span></label>
                                        <input type="date" name="fecha" value="<?php echo $registro["fecha"];?>" class="form-control in-put" required>
                                      </div>
                                      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                        <label class="color">ID: </label>
                                        <input type="text" name="id_manifiesto" value="<?php echo $registro["id_manifiesto"];?>" class="form-control in-put">
                                      </div>
                                    </div>

                                    <div class="form-row mt-2">
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <label class="color">Entidad: <span class="rojo">*</span></label>
                                        <input type="text" name="entidad" value="<?php echo $registro["entidad"];?>" class="form-control in-put" required>
                                      </div>
                                      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                        <label class="color">Equipo: </label>
                                        <input type="text" name="equipo" value="<?php echo $registro["equipo"];?>" class="form-control in-put">
                                      </div>
                                      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                                        <label class="color">Placa vehiculo: <span class="rojo">*</span></label>
                                        <input type="text" name="placa" value="<?php echo $registro["placa_vehiculo"];?>" class="form-control in-put" required>
                                      </div>
                                    </div>

                                    <div class="form-row mt-2">
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <label class="color">Conductor operativo: <span class="rojo">*</span></label>
                                        <input type="text" name="conductor" value="<?php echo $registro["conductor_operativo"];?>" class="form-control in-put" required>
                                      </div>
                                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                        <label class="color">Hora recolección: <span class="rojo">*</span></label>
                                        <input type="time" name="hora_re" value="<?php echo $registro["hora_recoleccion"];?>" class="form-control in-put" required>
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
                    <div id="collapse3" class="panel-collapse collapse in show">
                      <div class="card-body">

                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <?php if ($registro['nombre_material'] == "Material Absorbente"){ ?>

                              <div class="form-check sel-residuos">
                                <input type="checkbox" checked id="material" name="materialr[]" value="Material Absorbente" onchange="javascript:mat_abs()">
                                <label for="material">Material Absorbente</label>
                              </div>

                              <div class="row" id="material_absorvente">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="input-info">
                                  <label style="color: #76a03f;">Cantidad </label>
                                  <input type="number" name="materialr[]" value="<?php echo $registro['material_cantidad']; ?>" placeholder="" class="form-control in-put">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="input-info">
                                  <label style="color: #76a03f;">Métrica </label>
                                  <select class="custom-select in-put" name="materialr[]">
                                    <option value="<?php echo $registro['material_metrica']; ?>"><?php echo $registro['material_metrica']; ?></option>
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

                            <?php }else{ ?>

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

                            <?php } ?>
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <?php if ($registro['nombre_plastico'] == "Plástico contaminante"){ ?>

                              <div class="form-check sel-residuos">
                              <input type="checkbox" checked id="plastico" name="plasticoc[]" value="Plástico contaminante" onchange="javascript:plasticos()">
                              <label for="plastico">Plástico contaminante</label>
                            </div>

                            <div class="row" id="plastico_contaminante">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="input-info">
                                  <label style="color: #76a03f;">Cantidad </label>
                                  <input type="number" name="plasticoc[]" value="<?php echo $registro['plastico_cantidad']; ?>" class="form-control in-put">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="input-info">
                                  <label style="color: #76a03f;">Métrica </label>
                                  <select class="custom-select in-put" name="plasticoc[]">
                                    <option value="<?php echo $registro['plastico_metrica']; ?>"><?php echo $registro['plastico_metrica']; ?></option>
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

                           <?php }else{ ?>

                            <div class="form-check sel-residuos">
                              <input type="checkbox" id="plastico" name="plasticoc[]" value="Plástico contaminante" onchange="javascript:plasticos()">
                              <label for="plastico">Plástico contaminante</label>
                            </div>

                            <div class="row" id="plastico_contaminante" style="display: none;">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="input-info">
                                  <label style="color: #76a03f;">Cantidad </label>
                                  <input type="number" name="plasticoc[]" class="form-control in-put">
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

                          <?php } ?>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <?php if ($registro['nombre_lodos'] == "Lodos Aceitosos"){ ?>

                              <div class="form-check sel-residuos">
                                <input type="checkbox" checked id="lodo" name="lodosa[]" value="Lodos Aceitosos" onchange="javascript:lodos()">
                                <label for="lodo">Lodos Aceitosos</label>
                              </div>

                              <div class="row" id="lodos_aceitosos">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Cantidad </label>
                                    <input type="number" name="lodosa[]" value="<?php echo $registro['lodos_cantidad']; ?>" class="form-control in-put">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Métrica </label>
                                    <select class="custom-select in-put" name="lodosa[]">
                                      <option value="<?php echo $registro['lodos_metrica']; ?>"><?php echo $registro['lodos_metrica']; ?></option>
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

                            <?php }else{ ?>

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

                            <?php } ?>
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <?php if ($registro['nombre_carton'] == "Cartón contaminado"){ ?>

                              <div class="form-check sel-residuos">
                                <input type="checkbox" checked id="carton" name="cartonc[]" value="Cartón contaminado" onchange="javascript:carton_c()">
                                <label for="carton">Cartón contaminado</label>
                              </div>

                              <div class="row" id="carton_contaminado">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Cantidad </label>
                                    <input type="number" name="cartonc[]" value="<?php echo $registro['carton_cantidad']; ?>" class="form-control in-put">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Métrica </label>
                                    <select class="custom-select in-put" name="cartonc[]">
                                      <option value="<?php echo $registro['carton_metrica']; ?>"><?php echo $registro['carton_metrica']; ?></option>
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

                            <?php }else{ ?>

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

                           <?php } ?>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <?php if ($registro['nombre_vidrio'] == "Vidrio contaminado"){ ?>

                              <div class="form-check sel-residuos">
                                <input type="checkbox" checked id="vidrio" name="vidrioc[]" value="Vidrio contaminado" onchange="javascript:vidrio_con()">
                                <label for="vidrio">Vidrio contaminado</label>
                              </div>

                              <div class="row" id="vidrio_contaminado">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Cantidad </label>
                                    <input type="number" name="vidrioc[]" value="<?php echo $registro['vidrio_cantidad']; ?>" class="form-control in-put">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Métrica </label>
                                    <select class="custom-select in-put" name="vidrioc[]">
                                      <option value="<?php echo $registro['vidrio_metrica']; ?>"><?php echo $registro['vidrio_metrica']; ?></option>
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

                            <?php }else{ ?>

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

                            <?php  } ?>

                            
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <?php if ($registro['nombre_metales'] == "Metales (chatarra)"){ ?>

                              <div class="form-check sel-residuos">
                                <input type="checkbox" checked id="metal" name="metales[]" value="Metales (chatarra)" onchange="javascript:metales()">
                                <label for="metal">Metales (chatarra)</label>
                              </div>

                              <div class="row" id="metales_chatarra">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Cantidad </label>
                                    <input type="number" name="metales[]" value="<?php echo $registro['metales_cantidad']; ?>" class="form-control in-put">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Métrica </label>
                                    <select class="custom-select in-put" name="metales[]">
                                      <option value="<?php echo $registro['metales_metrica']; ?>"><?php echo $registro['metales_metrica']; ?></option>
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

                            <?php }else{ ?>

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
                            <?php } ?>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <?php if ($registro['nombre_filtros'] == "Filtros"){ ?>

                              <div class="form-check sel-residuos">
                                <input type="checkbox" checked id="filtro" name="filtros[]" value="Filtros" onchange="javascript:filtros()">
                                <label for="filtro">Filtros</label>
                              </div>

                              <div class="row" id="filtross">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Cantidad </label>
                                    <input type="number" name="filtros[]" value="<?php echo $registro['filtros_cantidad']; ?>" class="form-control in-put">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Métrica </label>
                                    <select class="custom-select in-put" name="filtros[]">
                                      <option value="<?php echo $registro['filtros_metrica']; ?>"><?php echo $registro['filtros_metrica']; ?></option>
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

                            <?php }else{ ?>

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

                            <?php } ?>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <?php if ($registro['nombre_aceites'] == "Aceites Industriales"){ ?>

                              <div class="form-check sel-residuos">
                                <input type="checkbox" checked id="aceite" name="aceites[]" value="Aceites Industriales" onchange="javascript:aceites()">
                                <label for="aceite">Aceites Industriales</label>
                              </div>

                              <div class="row" id="aceites_industriales">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Cantidad </label>
                                    <input type="number" name="aceites[]" value="<?php echo $registro['aceites_cantidad']; ?>" class="form-control in-put">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Métrica </label>
                                    <select class="custom-select in-put" name="aceites[]">
                                      <option value="<?php echo $registro['aceites_metrica']; ?>"><?php echo $registro['aceites_metrica']; ?></option>
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

                           <?php }else{ ?>

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

                           <?php } ?>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <?php if ($registro['nombre_solventes'] == "Solventes"){ ?>

                              <div class="form-check sel-residuos">
                                <input type="checkbox" checked id="solvente" name="solventes[]" value="Solventes" onchange="javascript:solventes()">
                                <label for="solvente">Solventes</label>
                              </div>

                              <div class="row" id="solventess">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Cantidad </label>
                                    <input type="number" name="solventes[]" value="<?php echo $registro['solventes_cantidad']; ?>" class="form-control in-put">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Métrica </label>
                                    <select class="custom-select in-put" name="solventes[]">
                                      <option value="<?php echo $registro['solventes_metrica']; ?>"><?php echo $registro['solventes_metrica']; ?></option>
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

                            <?php }else{ ?>

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

                            <?php } ?>
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <?php if ($registro['nombre_residuo'] == "Residuo Químico"){ ?>

                              <div class="form-check sel-residuos">
                                <input type="checkbox" checked id="residuo_q" name="rquimico[]" value="Residuo Químico" onchange="javascript:residuos_quimicos()">
                                <label for="residuo_q">Residuo Químico</label>
                              </div>

                              <div class="row" id="residuos">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Cantidad </label>
                                    <input type="number" name="rquimico[]" value="<?php echo $registro['residuo_cantidad']; ?>" class="form-control in-put">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Métrica </label>
                                    <select class="custom-select in-put" name="rquimico[]">
                                      <option value="<?php echo $registro['residuo_metrica']; ?>"><?php echo $registro['residuo_metrica']; ?></option>
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

                            <?php }else{ ?>

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

                            <?php } ?>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <?php if ($registro['nombre_fluorescente'] == "Fluorescentes"){ ?>

                              <div class="form-check sel-residuos">
                                <input type="checkbox" checked id="fluo" name="fluores[]" value="Fluorescentes" onchange="javascript:fluorecente()">
                                <label for="fluo">Fluorescentes</label>
                              </div>

                              <div class="row" id="fluorecentes">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Cantidad </label>
                                    <input type="number" name="fluores[]" value="<?php echo $registro['fluorescente_cantidad']; ?>" class="form-control in-put">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Métrica </label>
                                    <select class="custom-select in-put" name="fluores[]">
                                      <option value="<?php echo $registro['fluorescente_metrica']; ?>"><?php echo $registro['fluorescente_metrica']; ?></option>
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

                            <?php }else{ ?>

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

                            <?php } ?>
                              
                            
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <?php if ($registro['nombre_bateria'] == "Baterías"){ ?>


                              <div class="form-check sel-residuos">
                              <input type="checkbox" checked id="bateria" name="baterias[]" value="Baterías" onchange="javascript:baterias()">
                              <label for="bateria">Baterías</label>
                            </div>

                            <div class="row" id="bateriass">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="input-info">
                                  <label style="color: #76a03f;">Cantidad </label>
                                  <input type="number" name="baterias[]" value="<?php echo $registro['bateria_cantidad']; ?>" class="form-control in-put">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="input-info">
                                  <label style="color: #76a03f;">Métrica </label>
                                  <select class="custom-select in-put" name="baterias[]">
                                    <option value="<?php echo $registro['bateria_metrica']; ?>"><?php echo $registro['bateria_metrica']; ?></option>
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

                            <?php }else{ ?>

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

                            <?php } ?>
                              
                            
                          </div>
                        </div>


                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <?php if ($registro['nombre_pila'] == "Pilas"){ ?>

                            <div class="form-check sel-residuos">
                              <input type="checkbox" checked id="pila" name="pilas[]" value="Pilas" onchange="javascript:pilas()">
                              <label for="pila">Pilas</label>
                            </div>

                            <div class="row" id="pilass">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="input-info">
                                  <label style="color: #76a03f;">Cantidad </label>
                                  <input type="number" name="pilas[]" value="<?php echo $registro['pila_cantidad']; ?>" class="form-control in-put">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="input-info">
                                  <label style="color: #76a03f;">Métrica </label>
                                  <select class="custom-select in-put" name="pilas[]">
                                    <option value="<?php echo $registro['pila_metrica']; ?>"><?php echo $registro['pila_metrica']; ?></option>
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

                            <?php }else{ ?>

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

                            <?php } ?>
                              
                            
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <?php if ($registro['nombre_r_organico'] == "Residuos Orgánicos"){ ?>

                            <div class="form-check sel-residuos">
                              <input type="checkbox" checked id="resi" name="r_organico[]" value="Residuos Orgánicos" onchange="javascript:residuos_organicos()">
                              <label for="resi">Residuos Orgánicos</label>
                            </div>

                            <div class="row" id="residuo_org">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="input-info">
                                  <label style="color: #76a03f;">Cantidad </label>
                                  <input type="number" name="r_organico[]" value="<?php echo $registro['r_organico_cantidad']; ?>" class="form-control in-put">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="input-info">
                                  <label style="color: #76a03f;">Métrica </label>
                                  <select class="custom-select in-put" name="r_organico[]">
                                    <option value="<?php echo $registro['r_organico_metrica']; ?>"><?php echo $registro['r_organico_metrica']; ?></option>
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

                            <?php }else{ ?>

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

                            <?php } ?>
                              
                            
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <?php if ($registro['nombre_r_ordinario'] == "Residuos Ordinarios"){ ?>

                            <div class="form-check sel-residuos">
                              <input type="checkbox" checked id="resio" name="r_ordinario[]" value="Residuos Ordinarios" onchange="javascript:residuos_ordinarios()">
                              <label for="resio">Residuos Ordinarios</label>
                            </div>

                            <div class="row" id="residuos_ordinario">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="input-info">
                                  <label style="color: #76a03f;">Cantidad </label>
                                  <input type="number" name="r_ordinario[]" value="<?php echo $registro['r_ordinario_cantidad']; ?>" class="form-control in-put">
                                </div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                <div class="input-info">
                                  <label style="color: #76a03f;">Métrica </label>
                                  <select class="custom-select in-put" name="r_ordinario[]">
                                    <option value="<?php echo $registro['r_ordinario_metrica']; ?>"><?php echo $registro['r_ordinario_metrica']; ?></option>
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

                            <?php }else{ ?>

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

                            <?php } ?>
                              
                            
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <?php if ($registro['nombre_r_reciclable'] == "Residuos Reciclables"){ ?>

                              <div class="form-check sel-residuos">
                                <input type="checkbox" checked id="resicl" name="r_reciclable[]" value="Residuos Reciclables" onchange="javascript:residuos_reciclables()">
                                <label for="resicl">Residuos Reciclables</label>
                              </div>

                              <div class="row" id="residuo_reciclable">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Cantidad </label>
                                    <input type="number" name="r_reciclable[]" value="<?php echo $registro['r_reciclable_cantidad']; ?>" class="form-control in-put">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Métrica </label>
                                    <select class="custom-select in-put" name="r_reciclable[]">
                                      <option value="<?php echo $registro['r_reciclable_metrica']; ?>"><?php echo $registro['r_reciclable_metrica']; ?></option>
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

                            <?php }else{ ?>

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

                            <?php } ?>
                              
                            
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <?php if ($registro['nombre_r_cortopun'] == "Residuos Cortopunzantes"){ ?>

                              <div class="form-check sel-residuos">
                                <input type="checkbox" checked id="resipun" name="r_cortopun[]" value="Residuos Cortopunzantes" onchange="javascript:residuos_cortopunzantes()">
                                <label for="resipun">Residuos Cortopunzantes</label>
                              </div>

                              <div class="row" id="residuo_cortopunzante">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Cantidad </label>
                                    <input type="number" name="r_cortopun[]" value="<?php echo $registro['r_cortopun_cantidad']; ?>" class="form-control in-put">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Métrica </label>
                                    <select class="custom-select in-put" name="r_cortopun[]">
                                      <option value="<?php echo $registro['r_cortopun_metrica']; ?>"><?php echo $registro['r_cortopun_metrica']; ?></option>
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

                            <?php }else{ ?>

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

                            <?php } ?>
                              
                            
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

                            <?php if ($registro['nombre_epps'] == "EPPS"){ ?>

                              <div class="form-check sel-residuos">
                                <input type="checkbox" checked id="epp" name="epps[]" value="EPPS" onchange="javascript:epps()">
                                <label for="epp">EPPS</label>
                              </div>

                              <div class="row" id="eppss">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Cantidad </label>
                                    <input type="number" name="epps[]" value="<?php echo $registro['epps_cantidad']; ?>" class="form-control in-put">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Métrica </label>
                                    <select class="custom-select in-put" name="epps[]">
                                      <option value="<?php echo $registro['epps_metrica']; ?>"><?php echo $registro['epps_metrica']; ?></option>
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

                            <?php }else{ ?>

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

                            <?php } ?>

                            
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <?php if ($registro['otros1_nombre'] == $registro['otros1_nombre']){ ?>

                              <div class="form-check sel-residuos">
                                <input type="checkbox" checked id="otr" onchange="javascript:otros()">
                                <label for="otr">Otros</label>
                              </div>

                              <div class="row" id="otro">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Nombre </label>
                                    <input type="text" name="otros1[]" value="<?php echo $registro['otros1_nombre']; ?>" class="form-control in-put">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Cantidad </label>
                                    <input type="number" name="otros1[]" value="<?php echo $registro['otros1_cantidad']; ?>" class="form-control in-put">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Métrica </label>
                                    <select class="custom-select in-put" name="otros1[]">
                                      <option value="<?php echo $registro['otros1_metrica']; ?>"><?php echo $registro['otros1_metrica']; ?></option>
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

                            <?php }else{ ?>

                              <div class="form-check sel-residuos">
                                <input type="checkbox" id="otr" onchange="javascript:otros()">
                                <label for="otr">Otros</label>
                              </div>

                              <div class="row" id="otro" style="display: none;">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Nombre </label>
                                    <input type="text" name="otros1[]" value="<?php echo $registro['otros2_nombre']; ?>" class="form-control in-put">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Cantidad </label>
                                    <input type="number" name="otros1[]" value="<?php echo $registro['otros2_cantidad']; ?>" class="form-control in-put">
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

                            <?php } ?>

                            
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

                            <?php if ($registro['otros2_nombre'] == $registro['otros2_nombre']){ ?>

                              <div class="form-check sel-residuos">
                                <input type="checkbox" checked id="otr2"  onchange="javascript:otros2()">
                                <label for="otr2">Otros</label>
                              </div>

                              <div class="row" id="otro2">
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Nombre </label>
                                    <input type="text" name="otros2[]" value="<?php echo $registro['otros2_nombre']; ?>" class="form-control in-put">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Cantidad </label>
                                    <input type="number" name="otros2[]" value="<?php echo $registro['otros2_cantidad']; ?>" class="form-control in-put">
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                                  <div class="input-info">
                                    <label style="color: #76a03f;">Métrica </label>
                                    <select class="custom-select in-put" name="otros2[]">
                                      <option value="<?php echo $registro['otros2_metrica']; ?>"><?php echo $registro['otros2_metrica']; ?></option>
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

                            <?php }else{ ?>

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

                            <?php } ?>                            
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
                    <div id="collapse4" class="panel-collapse collapse in show">
                      <div class="card-body">
                        <div class="form-group">
                           <label class="color">Observaciones: </label>
                            <textarea class="form-control in-put" name="observaciones" value="<?php echo $registro['observaciones']; ?>"><?php echo $registro['observaciones']; ?></textarea>
                        </div>
                      </div>
                    </div>

                  <!--Sección 5 Collapse-->

                  <div class="card-header" role="tab" id="heading5">
                    <h5 class="mb-0">
                      <a class="titulos_a" href="#collapse5" data-toggle="collapse" data-parent="#accordion">
                      Despachado por:
                      </a>
                    </h5>
                  </div>
                  <div id="collapse5" class="panel-collapse collapse in show">
                    <div class="card-body" style="text-align: center;">
                      <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <canvas id="draw-canvas" width="240" height="180">
                            No tienes un buen navegador.
                          </canvas>

                          <br>
                          <button type="button" class="buttondespachado" id="draw-submitBtn">Guardar</button>
                          <button type="button" class="buttonborrar" id="draw-clearBtn">Borrar</button>
                              <label style="display: none;">Color</label>
                              <input style="display: none;" type="color" id="color">
                              <label style=" display: none;">Tamaño Puntero</label>
                              <input style="display: none;" type="range" id="puntero" min="1" default="1" max="5" width="10%"> 
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">

                          <div class="mt-3">

                            <textarea style="display: none;" id="draw-dataUrl" name="firma1" class="form-control" rows="5"></textarea>

                            <img id="draw-image" alt=". Ninguna firma"/>
                            
                          </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <p>Firma adjunta</p>
                        <?php 
                          $Base64Img = $registro['firma_despachador'];

                          list(, $Base64Img) = explode(';', $Base64Img);
                          list(, $Base64Img) = explode(',', $Base64Img);

                          $Base64Img = base64_decode($Base64Img);

                          file_put_contents('img/firmas-mani/unodepiera.png', $Base64Img);    
                          echo "<img src='img/firmas-mani/unodepiera.png' alt='unodepiera' />";

                         ?>
                        </div>
                      </div>
                    </div>
                  </div>


                  <!--Sección 6 Collapse-->

                    <div class="card-header" role="tab" id="heading5">
                      <h5 class="mb-0">
                        <a class="titulos_a" href="#collapse5" data-toggle="collapse" data-parent="#accordion">
                        Recibido por:
                        </a>
                      </h5>
                    </div>
                    <div id="collapse5" class="panel-collapse collapse in show">
                      <div class="card-body" style="text-align: center;">
                        <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <canvas id="draw2-canvas" width="240" height="180">
                              No tienes un buen navegador.
                            </canvas>

                            <br>
                            <button type="button" class="buttondespachado" id="draw2-submitBtn">Guardar</button>
                            <button type="button" class="buttonborrar" id="draw2-clearBtn">Borrar</button>
                                <label style="display: none;">Color</label>
                                <input style="display: none;" type="color" id="color">
                                <label style=" display: none;">Tamaño Puntero</label>
                                <input style="display: none;" type="range" id="puntero" min="1" default="1" max="5" width="10%"> 
                          </div>
                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <div class="mt-3">
                              <textarea style="display:none;" id="draw2-dataUrl" name="firma2" class="form-control" rows="5"></textarea>

                            <img id="draw2-image" alt=". Ninguna firma"/>
                            </div>
                          </div>

                          <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                            <p>Firma adjunta</p>
                            <?php 
                              $BasImg = $registro['firma_recibido'];

                              list(, $BasImg) = explode(';', $BasImg);
                              list(, $BasImg) = explode(',', $BasImg);

                              $BasImg = base64_decode($BasImg);

                              file_put_contents('img/firmas-mani/unodepiera2.png', $BasImg);    
                              echo "<img src='img/firmas-mani/unodepiera2.png' alt='unodepiera2' />";

                             ?>
                          </div>
                        </div>
                      </div>
                    </div>

                    <input type="hidden" name="num_manifiesto" value="<?php echo $registro['num_manifiesto']; ?>">
                    <input type="hidden" name="nit" value="<?php echo $_SESSION["empresas_nit"];  ?>">
                    <input type="hidden" name="id" value="<?php echo $registro['id']; ?>">

                    
                  </div>
                </div> 
                <div class="form-row mt-4">
                  <div class="col-sm-12 col-md-12 text-center">
                    <button type="submit" class="botonreg">Guardar</button>
                    <button type="button" onClick="location.href='actas_tabla.php'" class="botoncan">Cancelar</button>
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
