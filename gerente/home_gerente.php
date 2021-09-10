<?php require_once "vistas/vista_superior.php"?>


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
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-table"></i>
          <span>Datos</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
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

          <!-- Topbar Search -->
        

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
           

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

        <!-- Contenido de la Pagina -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800 text-center animated bounceIn"> <strong>Hola! Gerente</strong></h1>
          <div class="row">
          <div class="col-xs-12 col-md-12">
            <br>
            <br>
            <br>
          </div>
          </div>
         
            <div class="row">
              <div class="col-xs-12 col-md-4">
                  <div class="small-box bg-info1 animated bounceInLeft">
                    <div class="inner text-white pa">
                      <h3>
                          <?php
                          include 'conexion_bd.php';                
                          $sql = "SELECT COUNT(*) total FROM empresas";
                          $result = mysqli_query($mysqli, $sql);
                          $fila = mysqli_fetch_assoc($result);
                          echo '<a style="color: #34495e;">'.$fila['total'].'</a>';
                          ?>   
                      </h3>
                        <p style="color: #34495e;"><strong>Empresas Registradas</strong></p>
                    </div>
                      <div class="icon">
                        <i class="fas fa-building" style="color: rgba(52,73,94)"></i>
                      </div>
                      <a href="empresas_gerente.php" class="small-box-footer">Detalles <i class="fas fa-arrow-right"></i></a>
                  </div>
              </div>

              <div class="col-xs-12 col-md-4">
                <div class="small-box bg-success1 animated bounceInLeft">
                  <div class="inner text-white pa">
                    <h3>
                      <?php
                        include 'conexion_bd.php';                
                        $sql = "SELECT COUNT(*) total FROM usuarios WHERE usuario_id=".$_SESSION["id"];
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
                  <a href="usuarios_gerente.php" class="small-box-footer detalle">Detalles <i class="fas fa-arrow-right"></i></a>
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
            <br>
            <br>
            <br>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    <?php require_once "vistas/vista_inferior.php"?>

  <script type="text/javascript">
    $(function(){
  var actualizarHora = function(){
    var fecha = new Date(),
        hora = fecha.getHours(),
        minutos = fecha.getMinutes(),
        segundos = fecha.getSeconds(),
        diaSemana = fecha.getDay(),
        dia = fecha.getDate(),
        mes = fecha.getMonth(),
        anio = fecha.getFullYear(),
        ampm;
    
    var $pHoras = $("#horas"),
        $pSegundos = $("#segundos"),
        $pMinutos = $("#minutos"),
        $pAMPM = $("#ampm"),
        $pDiaSemana = $("#diaSemana"),
        $pDia = $("#dia"),
        $pMes = $("#mes"),
        $pAnio = $("#anio");
    var semana = ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];
    var meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];
    
    $pDiaSemana.text(semana[diaSemana]);
    $pDia.text(dia);
    $pMes.text(meses[mes]);
    $pAnio.text(anio);
    if(hora>=12){
      hora = hora - 12;
      ampm = "PM";
    }else{
      ampm = "AM";
    }
    if(hora == 0){
      hora = 12;
    }
    if(hora<10){$pHoras.text("0"+hora)}else{$pHoras.text(hora)};
    if(minutos<10){$pMinutos.text("0"+minutos)}else{$pMinutos.text(minutos)};
    if(segundos<10){$pSegundos.text("0"+segundos)}else{$pSegundos.text(segundos)};
    $pAMPM.text(ampm);
    
  };
  
  
  actualizarHora();
  var intervalo = setInterval(actualizarHora,1000);
});

  </script>
</body>

</html>
