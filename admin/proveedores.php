<?php require_once "vistas/vista_superior.php"?>

<?php
require '../php/conexion_bd.php';

$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM proveedores WHERE nit=".$_SESSION["empresas_nit"];
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
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
            <a class="collapse-item" href="clientes.php"><i class="fas fa-users"></i>  Mis clientes</a>
            <a class="collapse-item active" href="proveedores.php"><i class="fas fa-truck-moving"></i>  Mis proveedores</a>
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
              Inicio del contenido de la Página de BASE DE DATOS EMPRESAS y CONTAINER-FLUID 
        ------------------------------------------------------------------------------------------>

        <div class="container-fluid">

          <!-- Titulo y boton de registro -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 animated fadeInUp"><b>Mis proveedores</b></h1>
            <a href="register_proveedor.php" class="d-none d-sm-inline-block btn btn-sm shadow-sm btnagregar"><i class="fas fa-user-plus text-white"></i> Registrar</a>  
          </div>


          <!-- Tabla de Ejemplo-->
          <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                          <button class="button_excel" type="button" onClick="location.href='excel/excel_proveedores.php'" ><i class="far fa-file-excel"></i></button>
                          <a href="pdf/proveedores.php" target="_blank"><button class="button_pdf" type="button"><i class="far fa-file-pdf"></i></button></a>  
                            <tr>
                                <th style='white-space: nowrap; width: 1px;color: #000'>ID</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Razón social / Nombre</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Tipo de Identificación</th>                        
                                <th style='white-space: nowrap; width: 1px;color: #000'>Identificación</th>  
                                <th style='white-space: nowrap; width: 1px;color: #000'>Representante</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Telefono</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Dirección Administración</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Dirección Correspondencia</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>País</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Ciudad</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Sitio Web</th>                        
                                <th style='white-space: nowrap; width: 1px;color: #000'>Actividad economica</th>  
                                <th style='white-space: nowrap; width: 1px;color: #000'>Tipo proveedor</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Disposiciones</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Licencia PDF</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Descripción</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Horario Lunes a Viernes</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Horario Sábados y Domingos</th> 
                                <th style='white-space: nowrap; width: 1px;color: #000'>Contacto compras</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Correo compras</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Contacto comercial</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Correo comercial</th>         
                                <th style="white-space: nowrap; width: 1px; color: #000">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                 
                            ?>
                            <tr>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['id'] ?></td>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['nombre'] ?></td>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['tipo_ident'] ?></td>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['identificacion'] ?>
                                <?php if ($dat['digito'] == "0"){ ?>
                                   <?php echo $dat['digito'] = "" ?>
                                <?php }else{ ?>
                                  - <?php echo $dat['digito'] ?></td>
                                <?php } ?>


                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['representante'] ?></td> 
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['telefono'] ?></td>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['direccion_admon'] ?></td>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['direccion_corres'] ?></td>
                                
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['pais'] ?></td>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['ciudad'] ?></td>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['sitio_web'] ?></td>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['acti_eco'] ?></td> 
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['tipo_prov'] ?></td>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['disposiciones'] ?></td>
                                <td style='white-space: nowrap; width: 1px; text-align: center;'>
                                <?php if ($dat['licencia'] == Null) {
                                  echo "Ningún archivo adjunto";
                                }else{ ?>
                                  <a target="_blank" href="php/descargarpdf.php?id=<?php echo $dat['id'];?>"><button class="btn btn-success btnpdf"><i class="far fa-file-pdf"></i></button></a>
                               <?php } ?></td> 
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['descripcion'] ?></td>

                                <td style='white-space: nowrap; width: 1px; text-align: center;'>
                                <?php if ($dat['horario_lv'] == Null) {
                                  echo "";
                                }else{ ?>
                                  <?php echo $dat['horario_lv'] ?> am - <?php echo $dat['horario_lv1'] ?> pm
                               <?php } ?></td>


                               <td style='white-space: nowrap; width: 1px; text-align: center;'>
                                <?php if ($dat['horario_sd'] == Null) {
                                  echo "";
                                }else{ ?>
                                  <?php echo $dat['horario_sd'] ?> am - <?php echo $dat['horario_sd1'] ?> pm
                               <?php } ?></td>

                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['contacto_compras'] ?></td>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['correo_compras'] ?></td>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['contacto_comer'] ?></td>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['correo_comer'] ?></td>  

                                <td style='white-space: nowrap; width: 1px;'><?php echo "<a href='ver_prove.php?id=".$dat['id']."'> <button type='button' class='btn btn-primary colorbtn'><i class='far fa-eye'></i></button></a>"."<a href='modif_prove.php?id=".$dat['id']."'><button type='button' class='btn btn-success1'><i class='fas fa-edit'></i></button></a>"."<a href='php/delete_prove.php?id=".$dat['id']."&licencia=".$dat['licencia']."' class='borrar2'><button type='button' class='btn btn-danger'><i class='fas fa-trash-alt'></i></button></a>";?></td>
                            </tr>
                            <?php
                                }
                            ?>                                
                        </tbody>        
                       </table>                    
                    </div>
          <!-- Tabla de Ejemplo-->

        </div>
        <!---------------------------------------------------------------------------------------- 
              Fin del contenido de la Página de BASE DE DATOS EMPRESAS y CONTAINER-FLUID 
        ------------------------------------------------------------------------------------------>

      </div>
      <!-- End of Main Content -->

      <?php require_once "vistas/vista_inferior.php"?>
  
    <script type="text/javascript">

    $(document).on("click", ".borrar2", function(e){
            e.preventDefault();

              url = $(this).attr("href");

              Swal.fire({
                title: '¿Quieres Eliminar?',
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#76a03f',
                cancelButtonColor: '#ff3547',
                confirmButtonText: 'Si, Borralo!',
                cancelButtonText: 'Cancelar',
              }).then((result) => {
                if (result.value) {
                  $.ajax({
                          url: url,
                          type: "POST",
                          success: function(){
                              window.location.href = "proveedores.php";
                              Swal.fire({
                              type: 'success',
                              title: 'Eliminado Correctamente',
                              showConfirmButton: false,
                              timer: 1500
                            })
                          }
                      });
                }
              });
              return false;
            });

    
  </script>  

</body>

</html>
