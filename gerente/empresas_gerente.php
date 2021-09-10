<?php require_once "vistas/vista_superior.php"?>

<?php

require '../php/conexion_bd.php';

$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM empresas";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home_gerente.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-lightbulb"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Fundación ECOTEC</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="home_gerente.php">
          <i class="fas fa-home"></i>
          <span>Inicio</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Registros
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-table"></i>
          <span>Datos</span>
        </a>
        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tablas de datos:</h6>
            <a class="collapse-item" href="empresas_gerente.php">Empresas</a>
            <a class="collapse-item" href="usuarios_gerente.php">Usuarios</a>
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
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["s_usuario"];?></span>
                <i class="fas fa-angle-down"></i>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
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
            <h1 class="h3 mb-0 text-gray-800 animated fadeInUp"><b>Registro de Empresas</b></h1>
            <a href="register_empresa_gerente.php" class="d-none d-sm-inline-block btn btn-sm shadow-sm btnagregar"><i class="fas fa-user-plus text-white"></i> Registrar</a>  
          </div>


          <!-- Tabla de Ejemplo-->
          <div class="table-responsive">        
                        <table id="tablaPersonas" class="table table-striped table-bordered table-condensed" style="width:100%">
                        <thead class="text-center">
                          <button class="button_excel" type="button" onClick="location.href='excel/excel_empresas.php'" ><i class="far fa-file-excel"></i></button>

                          <a href="pdf/empresas.php" target="_blank"><button class="button_pdf" type="button"><i class="far fa-file-pdf"></i></button></a>
                            <tr>
                                <th style='white-space: nowrap; width: 1px;color: #000'>NIT</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Razón social / Nombre</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Representante</th>                        
                                <th style='white-space: nowrap; width: 1px;color: #000'>Telefono</th>  
                                <th style='white-space: nowrap; width: 1px;color: #000'>Dirección</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Correo</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Pais</th>
                                <th style='white-space: nowrap; width: 1px;color: #000'>Ciudad</th>                                
                                <th style='white-space: nowrap; width: 1px;color: #000'>Sitio web</th>  
                                <th style="white-space: nowrap; width: 1px; color: #000">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                            
                            foreach($data as $dat) {                                                        
                            ?>
                            <tr>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['nit'] ?>-<?php echo $dat['digito'] ?></td>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['nombre'] ?></td>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['representante'] ?></td>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['telefono'] ?></td>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['direccion'] ?></td> 
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['correo'] ?></td>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['pais'] ?></td>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['ciudad'] ?></td>
                                <td style='white-space: nowrap; width: 1px;'><?php echo $dat['sitio_web'] ?></td>  

                                <td style='white-space: nowrap; width: 1px;'><?php echo "<a href='modif_empresa.php?nit=".$dat['nit']."'> <button type='button' class='btn btn-success1'><i class='fas fa-edit'></i></button></a>"."<a href='delete_emp.php?nit=".$dat['nit']."' class='borrar2'><button type='button' class='btn btn-danger'><i class='fas fa-trash-alt'></i></button></a>";?></td>
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
                              window.location.href = "empresas_gerente.php";
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
