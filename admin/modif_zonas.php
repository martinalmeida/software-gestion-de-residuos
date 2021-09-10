<?php require_once "vistas/vista_superior.php"?>

?>

<?php
    include("../gerente/conexion_bd.php");
    $query="SELECT * FROM zonas WHERE id_zonas=".$_GET['id_zonas'];
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
            <a class="collapse-item active" href="zonas.php"><i class="fas fa-thumbtack"></i>  Zonas</a>
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
              <form class="formulario-empresa" id="update_zonas" action="" method="POST" enctype="multipart/form-data">

                <div class="form-row">
                  <div class=" col-sm-12 col-md-12">
                    <h5 style="color: #217b1c"><b>Formulario de Registro de Zonas</b></h5>
                    <hr style="border-color: #76a03f">
                  </div>
                </div>

                <div class="form-row mt-2">
                  <div class="col-sm-12 col-md-6">
                    <label class="color">Nombre <span class="rojo">*</span></label>
                    <input type="text" name="nombre" placeholder="" class="form-control in-put" value="<?php echo $registro['nombre']; ?>" required>
                  </div>

                  <div class="col-sm-12 col-md-6">
                    <label class="color">Descripción </label>
                    <textarea class="form-control in-put" name="descripcion" value="<?php echo $registro['descripcion']; ?>"><?php echo $registro['descripcion']; ?></textarea>
                  </div>
                </div>

                <div class="form-row mt-4">
                  <div class="col-sm-12 col-md-6">
                    <label class="color">Pais <span class="rojo">*</span></label>
                    <select class="custom-select in-put" name="pais" required>
                      <option value="Colombia" id="CO">Colombia</option>
                    </select>
                  </div>

                  <div class="col-sm-12 col-md-6">
                    <label class="color">Ciudad / Depto <span class="rojo">*</span></label>
                    <select class="custom-select in-put" name="ciudad" required>
                      <option value="<?php echo $registro['ciudad']; ?>"><?php echo $registro['ciudad']; ?></option>
                      <option value="ABEJORRAL / ANTIOQUIA">ABEJORRAL / ANTIOQUIA</option>
                      <option value="ABREGO / N. DE SANTANDER">ABREGO / N. DE SANTANDER</option>
                      <option value="ABRIAQUI / ANTIOQUIA">ABRIAQUI / ANTIOQUIA</option>
                      <option value="ACACIAS / META">ACACIAS / META</option>
                      <option value="ACANDI / CHOCO">ACANDI / CHOCO</option>
                      <option value="ACEVEDO / HUILA">ACEVEDO / HUILA</option>
                      <option value="ACHI / BOLIVAR">ACHI / BOLIVAR</option>
                      <option value="AGRADO / HUILA">AGRADO / HUILA</option>
                      <option value="AGUA DE DIOS / CUNDINAMARCA">AGUA DE DIOS / CUNDINAMARCA</option>
                      <option value="AGUACHICA / CESAR">AGUACHICA / CESAR</option>
                      <option value="AGUADA / SANTANDER">AGUADA / SANTANDER</option>
                      <option value="AGUADAS / CALDAS">AGUADAS / CALDAS</option>
                      <option value="AGUAZUL / CASANARE">AGUAZUL / CASANARE</option>
                      <option value="AGUSTIN CODAZZI / CESAR">AGUSTIN CODAZZI / CESAR</option>
                      <option value="AIPE / HUILA">AIPE / HUILA</option>
                      <option value="ALBAN / CUNDINAMARCA">ALBAN / CUNDINAMARCA</option>
                      <option value="ALBAN / NARIÑO">ALBAN / NARIÑO</option>
                      <option value="ALBANIA / CAQUETA">ALBANIA / CAQUETA</option>
                      <option value="ALBANIA / LA GUAJIRA">ALBANIA / LA GUAJIRA</option>
                      <option value="ALBANIA / SANTANDER">ALBANIA / SANTANDER</option>
                      <option value="ALCALA / VALLE DEL CAUCA">ALCALA / VALLE DEL CAUCA</option>
                      <option value="ALDANA / NARIÑO">ALDANA / NARIÑO</option>
                      <option value="ALEJANDRIA / ANTIOQUIA">ALEJANDRIA / ANTIOQUIA</option>
                      <option value="ALGARROBO / MAGDALENA">ALGARROBO / MAGDALENA</option>
                      <option value="ALGECIRAS / HUILA">ALGECIRAS / HUILA</option>
                      <option value="ALMAGUER / CAUCA">ALMAGUER / CAUCA</option>
                      <option value="ALMEIDA / BOYACA">ALMEIDA / BOYACA</option>
                      <option value="ALPUJARRA / TOLIMA">ALPUJARRA / TOLIMA</option>
                      <option value="ALTAMIRA / HUILA">ALTAMIRA / HUILA</option>
                      <option value="ALTO BAUDO / CHOCO">ALTO BAUDO / CHOCO</option>
                      <option value="ALTOS DEL ROSARIO / BOLIVAR">ALTOS DEL ROSARIO / BOLIVAR</option>
                      <option value="ALVARADO / TOLIMA">ALVARADO / TOLIMA</option>
                      <option value="AMAGA / ANTIOQUIA">AMAGA / ANTIOQUIA</option>
                      <option value="AMALFI / ANTIOQUIA">AMALFI / ANTIOQUIA</option>
                      <option value="AMBALEMA / TOLIMA">AMBALEMA / TOLIMA</option>
                      <option value="ANAPOIMA / CUNDINAMARCA">ANAPOIMA / CUNDINAMARCA</option>
                      <option value="ANCUYA / NARIÑO">ANCUYA / NARIÑO</option>
                      <option value="ANDALUCIA / VALLE DEL CAUCA">ANDALUCIA / VALLE DEL CAUCA</option>
                      <option value="ANDES / ANTIOQUIA">ANDES / ANTIOQUIA</option>
                      <option value="ANGELOPOLIS / ANTIOQUIA">ANGELOPOLIS / ANTIOQUIA</option>
                      <option value="ANGOSTURA / ANTIOQUIA">ANGOSTURA / ANTIOQUIA</option>
                      <option value="ANOLAIMA / CUNDINAMARCA">ANOLAIMA / CUNDINAMARCA</option>
                      <option value="ANORI / ANTIOQUIA">ANORI / ANTIOQUIA</option>
                      <option value="ANSERMA / CALDAS">ANSERMA / CALDAS</option>
                      <option value="ANSERMANUEVO / VALLE DEL CAUCA">ANSERMANUEVO / VALLE DEL CAUCA</option>
                      <option value="ANZA / ANTIOQUIA">ANZA / ANTIOQUIA</option>
                      <option value="ANZOATEGUI / TOLIMA">ANZOATEGUI / TOLIMA</option>
                      <option value="APARTADO / ANTIOQUIA">APARTADO / ANTIOQUIA</option>
                      <option value="APIA / RISARALDA">APIA / RISARALDA</option>
                      <option value="APULO / CUNDINAMARCA">APULO / CUNDINAMARCA</option>
                      <option value="AQUITANIA / BOYACA">AQUITANIA / BOYACA</option>
                      <option value="ARACATACA / MAGDALENA">ARACATACA / MAGDALENA</option>
                      <option value="ARANZAZU / CALDAS">ARANZAZU / CALDAS</option>
                      <option value="ARATOCA / SANTANDER">ARATOCA / SANTANDER</option>
                      <option value="ARAUCA / ARAUCA">ARAUCA / ARAUCA</option>
                      <option value="ARAUQUITA / ARAUCA">ARAUQUITA / ARAUCA</option>
                      <option value="ARBELAEZ / CUNDINAMARCA">ARBELAEZ / CUNDINAMARCA</option>
                      <option value="ARBOLEDA / NARIÑO">ARBOLEDA / NARIÑO</option>
                      <option value="ARBOLEDAS / N. DE SANTANDER">ARBOLEDAS / N. DE SANTANDER</option>
                      <option value="ARBOLETES / ANTIOQUIA">ARBOLETES / ANTIOQUIA</option>
                      <option value="ARCABUCO / BOYACA">ARCABUCO / BOYACA</option>
                      <option value="ARENAL / BOLIVAR">ARENAL / BOLIVAR</option>
                      <option value="ARGELIA / ANTIOQUIA">ARGELIA / ANTIOQUIA</option>
                      <option value="ARGELIA / CAUCA">ARGELIA / CAUCA</option>
                      <option value="ARGELIA / VALLE DEL CAUCA">ARGELIA / VALLE DEL CAUCA</option>
                      <option value="ARIGUANI / MAGDALENA">ARIGUANI / MAGDALENA</option>
                      <option value="ARJONA / BOLIVAR">ARJONA / BOLIVAR</option>
                      <option value="ARMENIA / ANTIOQUIA">ARMENIA / ANTIOQUIA</option>
                      <option value="ARMENIA / QUINDIO">ARMENIA / QUINDIO</option>
                      <option value="ARMERO / TOLIMA">ARMERO / TOLIMA</option>
                      <option value="ARROYOHONDO / BOLIVAR">ARROYOHONDO / BOLIVAR</option>
                      <option value="ASTREA / CESAR">ASTREA / CESAR</option>
                      <option value="ATACO / TOLIMA">ATACO / TOLIMA</option>
                      <option value="ATRATO / CHOCO">ATRATO / CHOCO</option>
                      <option value="AYAPEL / CORDOBA">AYAPEL / CORDOBA</option>
                      <option value="BAGADO / CHOCO">BAGADO / CHOCO</option>
                      <option value="BAHIA SOLANO / CHOCO">BAHIA SOLANO / CHOCO</option>
                      <option value="BAJO BAUDO / CHOCO">BAJO BAUDO / CHOCO</option>
                      <option value="BALBOA / CAUCA">BALBOA / CAUCA</option>
                      <option value="BALBOA / RISARALDA">BALBOA / RISARALDA</option>
                      <option value="BARANOA / ATLANTICO">BARANOA / ATLANTICO</option>
                      <option value="BARAYA / HUILA">BARAYA / HUILA</option>
                      <option value="BARBACOAS / NARIÑO">BARBACOAS / NARIÑO</option>
                      <option value="BARBOSA / ANTIOQUIA">BARBOSA / ANTIOQUIA</option>
                      <option value="BARBOSA / SANTANDER">BARBOSA / SANTANDER</option>
                      <option value="BARICHARA / SANTANDER">BARICHARA / SANTANDER</option>
                      <option value="BARRANCA DE UPIA / META">BARRANCA DE UPIA / META</option>
                      <option value="BARRANCABERMEJA / SANTANDER">BARRANCABERMEJA / SANTANDER</option>
                      <option value="BARRANCAS / LA GUAJIRA">BARRANCAS / LA GUAJIRA</option>
                      <option value="BARRANCO DE LOBA / BOLIVAR">BARRANCO DE LOBA / BOLIVAR</option>
                      <option value="BARRANCO MINAS / GUAINIA">BARRANCO MINAS / GUAINIA</option>
                      <option value="BARRANQUILLA / ATLANTICO">BARRANQUILLA / ATLANTICO</option>
                      <option value="BECERRIL / CESAR">BECERRIL / CESAR</option>
                      <option value="BELALCAZAR / CALDAS">BELALCAZAR / CALDAS</option>
                      <option value="BELEN / BOYACA">BELEN / BOYACA</option>
                      <option value="BELEN / NARIÑO">BELEN / NARIÑO</option>
                      <option value="BELEN DE LOS ANDAQUIES / CAQUETA">BELEN DE LOS ANDAQUIES / CAQUETA</option>
                      <option value="BELEN DE UMBRIA / RISARALDA">BELEN DE UMBRIA / RISARALDA</option>
                      <option value="BELLO / ANTIOQUIA">BELLO / ANTIOQUIA</option>
                      <option value="BELMIRA / ANTIOQUIA">BELMIRA / ANTIOQUIA</option>
                      <option value="BELTRAN / CUNDINAMARCA">BELTRAN / CUNDINAMARCA</option>
                      <option value="BERBEO / BOYACA">BERBEO / BOYACA</option>
                      <option value="BETANIA / ANTIOQUIA">BETANIA / ANTIOQUIA</option>
                      <option value="BETEITIVA / BOYACA">BETEITIVA / BOYACA</option>
                      <option value="BETULIA / ANTIOQUIA">BETULIA / ANTIOQUIA</option>
                      <option value="BETULIA / SANTANDER">BETULIA / SANTANDER</option>
                      <option value="BITUIMA / CUNDINAMARCA">BITUIMA / CUNDINAMARCA</option>
                      <option value="BOAVITA / BOYACA">BOAVITA / BOYACA</option>
                      <option value="BOCHALEMA / N. DE SANTANDER">BOCHALEMA / N. DE SANTANDER</option>
                      <option value="BOGOTA, D.C. / BOGOTA">BOGOTA, D.C. / BOGOTA</option>
                      <option value="BOJACA / CUNDINAMARCA">BOJACA / CUNDINAMARCA</option>
                      <option value="BOJAYA / CHOCO">BOJAYA / CHOCO</option>
                      <option value="BOLIVAR / CAUCA">BOLIVAR / CAUCA</option>
                      <option value="BOLIVAR / SANTANDER">BOLIVAR / SANTANDER</option>
                      <option value="BOLIVAR / VALLE DEL CAUCA">BOLIVAR / VALLE DEL CAUCA</option>
                      <option value="BOSCONIA / CESAR">BOSCONIA / CESAR</option>
                      <option value="BOYACA / BOYACA">BOYACA / BOYACA</option>
                      <option value="BRICEÑO / ANTIOQUIA">BRICEÑO / ANTIOQUIA</option>
                      <option value="BRICEÑO / BOYACA">BRICEÑO / BOYACA</option>
                      <option value="BUCARAMANGA / SANTANDER">BUCARAMANGA / SANTANDER</option>
                      <option value="BUCARASICA / N. DE SANTANDER">BUCARASICA / N. DE SANTANDER</option>
                      <option value="BUENAVENTURA / VALLE DEL CAUCA">BUENAVENTURA / VALLE DEL CAUCA</option>
                      <option value="BUENAVISTA / BOYACA">BUENAVISTA / BOYACA</option>
                      <option value="BUENAVISTA / CORDOBA">BUENAVISTA / CORDOBA</option>
                      <option value="BUENAVISTA / QUINDIO">BUENAVISTA / QUINDIO</option>
                      <option value="BUENAVISTA / SUCRE">BUENAVISTA / SUCRE</option>
                      <option value="BUENOS AIRES / CAUCA">BUENOS AIRES / CAUCA</option>
                      <option value="BUESACO / NARIÑO">BUESACO / NARIÑO</option>
                      <option value="BUGALAGRANDE / VALLE DEL CAUCA">BUGALAGRANDE / VALLE DEL CAUCA</option>
                      <option value="BURITICA / ANTIOQUIA">BURITICA / ANTIOQUIA</option>
                      <option value="BUSBANZA / BOYACA">BUSBANZA / BOYACA</option>
                      <option value="CABRERA / CUNDINAMARCA">CABRERA / CUNDINAMARCA</option>
                      <option value="CABRERA / SANTANDER">CABRERA / SANTANDER</option>
                      <option value="CABUYARO / META">CABUYARO / META</option>
                      <option value="CACAHUAL / GUAINIA">CACAHUAL / GUAINIA</option>
                      <option value="CACERES / ANTIOQUIA">CACERES / ANTIOQUIA</option>
                      <option value="CACHIPAY / CUNDINAMARCA">CACHIPAY / CUNDINAMARCA</option>
                      <option value="CACHIRA / N. DE SANTANDER">CACHIRA / N. DE SANTANDER</option>
                      <option value="CACOTA / N. DE SANTANDER">CACOTA / N. DE SANTANDER</option>
                      <option value="CAICEDO / ANTIOQUIA">CAICEDO / ANTIOQUIA</option>
                      <option value="CAICEDONIA / VALLE DEL CAUCA">CAICEDONIA / VALLE DEL CAUCA</option>
                      <option value="CAIMITO / SUCRE">CAIMITO / SUCRE</option>
                      <option value="CAJAMARCA / TOLIMA">CAJAMARCA / TOLIMA</option>
                      <option value="CAJIBIO / CAUCA">CAJIBIO / CAUCA</option>
                      <option value="CAJICA / CUNDINAMARCA">CAJICA / CUNDINAMARCA</option>
                      <option value="CALAMAR / BOLIVAR">CALAMAR / BOLIVAR</option>
                      <option value="CALAMAR / GUAVIARE">CALAMAR / GUAVIARE</option>
                      <option value="CALARCA / QUINDIO">CALARCA / QUINDIO</option>
                      <option value="CALDAS / ANTIOQUIA">CALDAS / ANTIOQUIA</option>
                      <option value="CALDAS / BOYACA">CALDAS / BOYACA</option>
                      <option value="CALDONO / CAUCA">CALDONO / CAUCA</option>
                      <option value="CALI / VALLE DEL CAUCA">CALI / VALLE DEL CAUCA</option>
                      <option value="CALIFORNIA / SANTANDER">CALIFORNIA / SANTANDER</option>
                      <option value="CALIMA / VALLE DEL CAUCA">CALIMA / VALLE DEL CAUCA</option>
                      <option value="CALOTO / CAUCA">CALOTO / CAUCA</option>
                      <option value="CAMPAMENTO / ANTIOQUIA">CAMPAMENTO / ANTIOQUIA</option>
                      <option value="CAMPO DE LA CRUZ / ATLANTICO">CAMPO DE LA CRUZ / ATLANTICO</option>
                      <option value="CAMPOALEGRE / HUILA">CAMPOALEGRE / HUILA</option>
                      <option value="CAMPOHERMOSO / BOYACA">CAMPOHERMOSO / BOYACA</option>
                      <option value="CANALETE / CORDOBA">CANALETE / CORDOBA</option>
                      <option value="CANDELARIA / ATLANTICO">CANDELARIA / ATLANTICO</option>
                      <option value="CANDELARIA / VALLE DEL CAUCA">CANDELARIA / VALLE DEL CAUCA</option>
                      <option value="CANTAGALLO / BOLIVAR">CANTAGALLO / BOLIVAR</option>
                      <option value="CAÑASGORDAS / ANTIOQUIA">CAÑASGORDAS / ANTIOQUIA</option>
                      <option value="CAPARRAPI / CUNDINAMARCA">CAPARRAPI / CUNDINAMARCA</option>
                      <option value="CAPITANEJO / SANTANDER">CAPITANEJO / SANTANDER</option>
                      <option value="CAQUEZA / CUNDINAMARCA">CAQUEZA / CUNDINAMARCA</option>
                      <option value="CARACOLI / ANTIOQUIA">CARACOLI / ANTIOQUIA</option>
                      <option value="CARAMANTA / ANTIOQUIA">CARAMANTA / ANTIOQUIA</option>
                      <option value="CARCASI / SANTANDER">CARCASI / SANTANDER</option>
                      <option value="CAREPA / ANTIOQUIA">CAREPA / ANTIOQUIA</option>
                      <option value="CARMEN DE APICALA / TOLIMA">CARMEN DE APICALA / TOLIMA</option>
                      <option value="CARMEN DE CARUPA / CUNDINAMARCA">CARMEN DE CARUPA / CUNDINAMARCA</option>
                      <option value="CARMEN DEL DARIEN / CHOCO">CARMEN DEL DARIEN / CHOCO</option>
                      <option value="CAROLINA / ANTIOQUIA">CAROLINA / ANTIOQUIA</option>
                      <option value="CARTAGENA / BOLIVAR">CARTAGENA / BOLIVAR</option>
                      <option value="CARTAGENA DEL CHAIRA / CAQUETA">CARTAGENA DEL CHAIRA / CAQUETA</option>
                      <option value="CARTAGO / VALLE DEL CAUCA">CARTAGO / VALLE DEL CAUCA</option>
                      <option value="CARURU / VAUPES">CARURU / VAUPES</option>
                      <option value="CASABIANCA / TOLIMA">CASABIANCA / TOLIMA</option>
                      <option value="CASTILLA LA NUEVA / META">CASTILLA LA NUEVA / META</option>
                      <option value="CAUCASIA / ANTIOQUIA">CAUCASIA / ANTIOQUIA</option>
                      <option value="CEPITA / SANTANDER">CEPITA / SANTANDER</option>
                      <option value="CERETE / CORDOBA">CERETE / CORDOBA</option>
                      <option value="CERINZA / BOYACA">CERINZA / BOYACA</option>
                      <option value="CERRITO / SANTANDER">CERRITO / SANTANDER</option>
                      <option value="CERRO SAN ANTONIO / MAGDALENA">CERRO SAN ANTONIO / MAGDALENA</option>
                      <option value="CERTEGUI / CHOCO">CERTEGUI / CHOCO</option>
                      <option value="CHACHAGsI / NARIÑO">CHACHAGsI / NARIÑO</option>
                      <option value="CHAGUANI / CUNDINAMARCA">CHAGUANI / CUNDINAMARCA</option>
                      <option value="CHALAN / SUCRE">CHALAN / SUCRE</option>
                      <option value="CHAMEZA / CASANARE">CHAMEZA / CASANARE</option>
                      <option value="CHAPARRAL / TOLIMA">CHAPARRAL / TOLIMA</option>
                      <option value="CHARALA / SANTANDER">CHARALA / SANTANDER</option>
                      <option value="CHARTA / SANTANDER">CHARTA / SANTANDER</option>
                      <option value="CHIA / CUNDINAMARCA">CHIA / CUNDINAMARCA</option>
                      <option value="CHIBOLO / MAGDALENA">CHIBOLO / MAGDALENA</option>
                      <option value="CHIGORODO / ANTIOQUIA">CHIGORODO / ANTIOQUIA</option>
                      <option value="CHIMA / CORDOBA">CHIMA / CORDOBA</option>
                      <option value="CHIMA / SANTANDER">CHIMA / SANTANDER</option>
                      <option value="CHIMICHAGUA / CESAR">CHIMICHAGUA / CESAR</option>
                      <option value="CHINACOTA / N. DE SANTANDER">CHINACOTA / N. DE SANTANDER</option>
                      <option value="CHINAVITA / BOYACA">CHINAVITA / BOYACA</option>
                      <option value="CHINCHINA / CALDAS">CHINCHINA / CALDAS</option>
                      <option value="CHINU / CORDOBA">CHINU / CORDOBA</option>
                      <option value="CHIPAQUE / CUNDINAMARCA">CHIPAQUE / CUNDINAMARCA</option>
                      <option value="CHIPATA / SANTANDER">CHIPATA / SANTANDER</option>
                      <option value="CHIQUINQUIRA / BOYACA">CHIQUINQUIRA / BOYACA</option>
                      <option value="CHIQUIZA / BOYACA">CHIQUIZA / BOYACA</option>
                      <option value="CHIRIGUANA / CESAR">CHIRIGUANA / CESAR</option>
                      <option value="CHISCAS / BOYACA">CHISCAS / BOYACA</option>
                      <option value="CHITA / BOYACA">CHITA / BOYACA</option>
                      <option value="CHITAGA / N. DE SANTANDER">CHITAGA / N. DE SANTANDER</option>
                      <option value="CHITARAQUE / BOYACA">CHITARAQUE / BOYACA</option>
                      <option value="CHIVATA / BOYACA">CHIVATA / BOYACA</option>
                      <option value="CHIVOR / BOYACA">CHIVOR / BOYACA</option>
                      <option value="CHOACHI / CUNDINAMARCA">CHOACHI / CUNDINAMARCA</option>
                      <option value="CHOCONTA / CUNDINAMARCA">CHOCONTA / CUNDINAMARCA</option>
                      <option value="CICUCO / BOLIVAR">CICUCO / BOLIVAR</option>
                      <option value="CIENAGA / MAGDALENA">CIENAGA / MAGDALENA</option>
                      <option value="CIENAGA DE ORO / CORDOBA">CIENAGA DE ORO / CORDOBA</option>
                      <option value="CIENEGA / BOYACA">CIENEGA / BOYACA</option>
                      <option value="CIMITARRA / SANTANDER">CIMITARRA / SANTANDER</option>
                      <option value="CIRCASIA / QUINDIO">CIRCASIA / QUINDIO</option>
                      <option value="CISNEROS / ANTIOQUIA">CISNEROS / ANTIOQUIA</option>
                      <option value="CIUDAD BOLIVAR / ANTIOQUIA">CIUDAD BOLIVAR / ANTIOQUIA</option>
                      <option value="CLEMENCIA / BOLIVAR">CLEMENCIA / BOLIVAR</option>
                      <option value="COCORNA / ANTIOQUIA">COCORNA / ANTIOQUIA</option>
                      <option value="COELLO / TOLIMA">COELLO / TOLIMA</option>
                      <option value="COGUA / CUNDINAMARCA">COGUA / CUNDINAMARCA</option>
                      <option value="COLOMBIA / HUILA">COLOMBIA / HUILA</option>
                      <option value="COLON / NARIÑO">COLON / NARIÑO</option>
                      <option value="COLON / PUTUMAYO">COLON / PUTUMAYO</option>
                      <option value="COLOSO / SUCRE">COLOSO / SUCRE</option>
                      <option value="COMBITA / BOYACA">COMBITA / BOYACA</option>
                      <option value="CONCEPCION / ANTIOQUIA">CONCEPCION / ANTIOQUIA</option>
                      <option value="CONCEPCION / SANTANDER">CONCEPCION / SANTANDER</option>
                      <option value="CONCORDIA / ANTIOQUIA">CONCORDIA / ANTIOQUIA</option>
                      <option value="CONCORDIA / MAGDALENA">CONCORDIA / MAGDALENA</option>
                      <option value="CONDOTO / CHOCO">CONDOTO / CHOCO</option>
                      <option value="CONFINES / SANTANDER">CONFINES / SANTANDER</option>
                      <option value="CONSACA / NARIÑO">CONSACA / NARIÑO</option>
                      <option value="CONTADERO / NARIÑO">CONTADERO / NARIÑO</option>
                      <option value="CONTRATACION / SANTANDER">CONTRATACION / SANTANDER</option>
                      <option value="CONVENCION / N. DE SANTANDER">CONVENCION / N. DE SANTANDER</option>
                      <option value="COPACABANA / ANTIOQUIA">COPACABANA / ANTIOQUIA</option>
                      <option value="COPER / BOYACA">COPER / BOYACA</option>
                      <option value="CORDOBA / BOLIVAR">CORDOBA / BOLIVAR</option>
                      <option value="CORDOBA / NARIÑO">CORDOBA / NARIÑO</option>
                      <option value="CORDOBA / QUINDIO">CORDOBA / QUINDIO</option>
                      <option value="CORINTO / CAUCA">CORINTO / CAUCA</option>
                      <option value="COROMORO / SANTANDER">COROMORO / SANTANDER</option>
                      <option value="COROZAL / SUCRE">COROZAL / SUCRE</option>
                      <option value="CORRALES / BOYACA">CORRALES / BOYACA</option>
                      <option value="COTA / CUNDINAMARCA">COTA / CUNDINAMARCA</option>
                      <option value="COTORRA / CORDOBA">COTORRA / CORDOBA</option>
                      <option value="COVARACHIA / BOYACA">COVARACHIA / BOYACA</option>
                      <option value="COVEÑAS / SUCRE">COVEÑAS / SUCRE</option>
                      <option value="COYAIMA / TOLIMA">COYAIMA / TOLIMA</option>
                      <option value="CRAVO NORTE / ARAUCA">CRAVO NORTE / ARAUCA</option>
                      <option value="CUASPUD / NARIÑO">CUASPUD / NARIÑO</option>
                      <option value="CUBARA / BOYACA">CUBARA / BOYACA</option>
                      <option value="CUBARRAL / META">CUBARRAL / META</option>
                      <option value="CUCAITA / BOYACA">CUCAITA / BOYACA</option>
                      <option value="CUCUNUBA / CUNDINAMARCA">CUCUNUBA / CUNDINAMARCA</option>
                      <option value="CUCUTA / N. DE SANTANDER">CUCUTA / N. DE SANTANDER</option>
                      <option value="CUCUTILLA / N. DE SANTANDER">CUCUTILLA / N. DE SANTANDER</option>
                      <option value="CUITIVA / BOYACA">CUITIVA / BOYACA</option>
                      <option value="CUMARAL / META">CUMARAL / META</option>
                      <option value="CUMARIBO / VICHADA">CUMARIBO / VICHADA</option>
                      <option value="CUMBAL / NARIÑO">CUMBAL / NARIÑO</option>
                      <option value="CUMBITARA / NARIÑO">CUMBITARA / NARIÑO</option>
                      <option value="CUNDAY / TOLIMA">CUNDAY / TOLIMA</option>
                      <option value="CURILLO / CAQUETA">CURILLO / CAQUETA</option>
                      <option value="CURITI / SANTANDER">CURITI / SANTANDER</option>
                      <option value="CURUMANI / CESAR">CURUMANI / CESAR</option>
                      <option value="DABEIBA / ANTIOQUIA">DABEIBA / ANTIOQUIA</option>
                      <option value="DAGUA / VALLE DEL CAUCA">DAGUA / VALLE DEL CAUCA</option>
                      <option value="DIBULLA / LA GUAJIRA">DIBULLA / LA GUAJIRA</option>
                      <option value="DISTRACCION / LA GUAJIRA">DISTRACCION / LA GUAJIRA</option>
                      <option value="DOLORES / TOLIMA">DOLORES / TOLIMA</option>
                      <option value="DON MATIAS / ANTIOQUIA">DON MATIAS / ANTIOQUIA</option>
                      <option value="DOSQUEBRADAS / RISARALDA">DOSQUEBRADAS / RISARALDA</option>
                      <option value="DUITAMA / BOYACA">DUITAMA / BOYACA</option>
                      <option value="DURANIA / N. DE SANTANDER">DURANIA / N. DE SANTANDER</option>
                      <option value="EBEJICO / ANTIOQUIA">EBEJICO / ANTIOQUIA</option>
                      <option value="EL AGUILA / VALLE DEL CAUCA">EL AGUILA / VALLE DEL CAUCA</option>
                      <option value="EL BAGRE / ANTIOQUIA">EL BAGRE / ANTIOQUIA</option>
                      <option value="EL BANCO / MAGDALENA">EL BANCO / MAGDALENA</option>
                      <option value="EL CAIRO / VALLE DEL CAUCA">EL CAIRO / VALLE DEL CAUCA</option>
                      <option value="EL CALVARIO / META">EL CALVARIO / META</option>
                      <option value="EL CANTON DEL SAN PABLO / CHOCO">EL CANTON DEL SAN PABLO / CHOCO</option>
                      <option value="EL CARMEN / N. DE SANTANDER">EL CARMEN / N. DE SANTANDER</option>
                      <option value="EL CARMEN DE ATRATO / CHOCO">EL CARMEN DE ATRATO / CHOCO</option>
                      <option value="EL CARMEN DE BOLIVAR / BOLIVAR">EL CARMEN DE BOLIVAR / BOLIVAR</option>
                      <option value="EL CARMEN DE CHUCURI / SANTANDER">EL CARMEN DE CHUCURI / SANTANDER</option>
                      <option value="EL CARMEN DE VIBORAL / ANTIOQUIA">EL CARMEN DE VIBORAL / ANTIOQUIA</option>
                      <option value="EL CASTILLO / META">EL CASTILLO / META</option>
                      <option value="EL CERRITO / VALLE DEL CAUCA">EL CERRITO / VALLE DEL CAUCA</option>
                      <option value="EL CHARCO / NARIÑO">EL CHARCO / NARIÑO</option>
                      <option value="EL COCUY / BOYACA">EL COCUY / BOYACA</option>
                      <option value="EL COLEGIO / CUNDINAMARCA">EL COLEGIO / CUNDINAMARCA</option>
                      <option value="EL COPEY / CESAR">EL COPEY / CESAR</option>
                      <option value="EL DONCELLO / CAQUETA">EL DONCELLO / CAQUETA</option>
                      <option value="EL DORADO / META">EL DORADO / META</option>
                      <option value="EL DOVIO / VALLE DEL CAUCA">EL DOVIO / VALLE DEL CAUCA</option>
                      <option value="EL ENCANTO / AMAZONAS">EL ENCANTO / AMAZONAS</option>
                      <option value="EL ESPINO / BOYACA">EL ESPINO / BOYACA</option>
                      <option value="EL GUACAMAYO / SANTANDER">EL GUACAMAYO / SANTANDER</option>
                      <option value="EL GUAMO / BOLIVAR">EL GUAMO / BOLIVAR</option>
                      <option value="EL LITORAL DEL SAN JUAN / CHOCO">EL LITORAL DEL SAN JUAN / CHOCO</option>
                      <option value="EL MOLINO / LA GUAJIRA">EL MOLINO / LA GUAJIRA</option>
                      <option value="EL PASO / CESAR">EL PASO / CESAR</option>
                      <option value="EL PAUJIL / CAQUETA">EL PAUJIL / CAQUETA</option>
                      <option value="EL PEÑOL / NARIÑO">EL PEÑOL / NARIÑO</option>
                      <option value="EL PEÑON / BOLIVAR">EL PEÑON / BOLIVAR</option>
                      <option value="EL PEÑON / CUNDINAMARCA">EL PEÑON / CUNDINAMARCA</option>
                      <option value="EL PEÑON / SANTANDER">EL PEÑON / SANTANDER</option>
                      <option value="EL PIÑON / MAGDALENA">EL PIÑON / MAGDALENA</option>
                      <option value="EL PLAYON / SANTANDER">EL PLAYON / SANTANDER</option>
                      <option value="EL RETEN / MAGDALENA">EL RETEN / MAGDALENA</option>
                      <option value="EL RETORNO / GUAVIARE">EL RETORNO / GUAVIARE</option>
                      <option value="EL ROBLE / SUCRE">EL ROBLE / SUCRE</option>
                      <option value="EL ROSAL / CUNDINAMARCA">EL ROSAL / CUNDINAMARCA</option>
                      <option value="EL ROSARIO / NARIÑO">EL ROSARIO / NARIÑO</option>
                      <option value="EL SANTUARIO / ANTIOQUIA">EL SANTUARIO / ANTIOQUIA</option>
                      <option value="EL TABLON DE GOMEZ / NARIÑO">EL TABLON DE GOMEZ / NARIÑO</option>
                      <option value="EL TAMBO / CAUCA">EL TAMBO / CAUCA</option>
                      <option value="EL TAMBO / NARIÑO">EL TAMBO / NARIÑO</option>
                      <option value="EL TARRA / N. DE SANTANDER">EL TARRA / N. DE SANTANDER</option>
                      <option value="EL ZULIA / N. DE SANTANDER">EL ZULIA / N. DE SANTANDER</option>
                      <option value="ELIAS / HUILA">ELIAS / HUILA</option>
                      <option value="ENCINO / SANTANDER">ENCINO / SANTANDER</option>
                      <option value="ENCISO / SANTANDER">ENCISO / SANTANDER</option>
                      <option value="ENTRERRIOS / ANTIOQUIA">ENTRERRIOS / ANTIOQUIA</option>
                      <option value="ENVIGADO / ANTIOQUIA">ENVIGADO / ANTIOQUIA</option>
                      <option value="ESPINAL / TOLIMA">ESPINAL / TOLIMA</option>
                      <option value="FACATATIVA / CUNDINAMARCA">FACATATIVA / CUNDINAMARCA</option>
                      <option value="FALAN / TOLIMA">FALAN / TOLIMA</option>
                      <option value="FILADELFIA / CALDAS">FILADELFIA / CALDAS</option>
                      <option value="FILANDIA / QUINDIO">FILANDIA / QUINDIO</option>
                      <option value="FIRAVITOBA / BOYACA">FIRAVITOBA / BOYACA</option>
                      <option value="FLANDES / TOLIMA">FLANDES / TOLIMA</option>
                      <option value="FLORENCIA / CAQUETA">FLORENCIA / CAQUETA</option>
                      <option value="FLORENCIA / CAUCA">FLORENCIA / CAUCA</option>
                      <option value="FLORESTA / BOYACA">FLORESTA / BOYACA</option>
                      <option value="FLORIAN / SANTANDER">FLORIAN / SANTANDER</option>
                      <option value="FLORIDA / VALLE DEL CAUCA">FLORIDA / VALLE DEL CAUCA</option>
                      <option value="FLORIDABLANCA / SANTANDER">FLORIDABLANCA / SANTANDER</option>
                      <option value="FOMEQUE / CUNDINAMARCA">FOMEQUE / CUNDINAMARCA</option>
                      <option value="FONSECA / LA GUAJIRA">FONSECA / LA GUAJIRA</option>
                      <option value="FORTUL / ARAUCA">FORTUL / ARAUCA</option>
                      <option value="FOSCA / CUNDINAMARCA">FOSCA / CUNDINAMARCA</option>
                      <option value="FRANCISCO PIZARRO / NARIÑO">FRANCISCO PIZARRO / NARIÑO</option>
                      <option value="FREDONIA / ANTIOQUIA">FREDONIA / ANTIOQUIA</option>
                      <option value="FRESNO / TOLIMA">FRESNO / TOLIMA</option>
                      <option value="FRONTINO / ANTIOQUIA">FRONTINO / ANTIOQUIA</option>
                      <option value="FUENTE DE ORO / META">FUENTE DE ORO / META</option>
                      <option value="FUNDACION / MAGDALENA">FUNDACION / MAGDALENA</option>
                      <option value="FUNES / NARIÑO">FUNES / NARIÑO</option>
                      <option value="FUNZA / CUNDINAMARCA">FUNZA / CUNDINAMARCA</option>
                      <option value="FUQUENE / CUNDINAMARCA">FUQUENE / CUNDINAMARCA</option>
                      <option value="FUSAGASUGA / CUNDINAMARCA">FUSAGASUGA / CUNDINAMARCA</option>
                      <option value="GACHALA / CUNDINAMARCA">GACHALA / CUNDINAMARCA</option>
                      <option value="GACHANCIPA / CUNDINAMARCA">GACHANCIPA / CUNDINAMARCA</option>
                      <option value="GACHANTIVA / BOYACA">GACHANTIVA / BOYACA</option>
                      <option value="GACHETA / CUNDINAMARCA">GACHETA / CUNDINAMARCA</option>
                      <option value="GALAN / SANTANDER">GALAN / SANTANDER</option>
                      <option value="GALAPA / ATLANTICO">GALAPA / ATLANTICO</option>
                      <option value="GALERAS / SUCRE">GALERAS / SUCRE</option>
                      <option value="GAMA / CUNDINAMARCA">GAMA / CUNDINAMARCA</option>
                      <option value="GAMARRA / CESAR">GAMARRA / CESAR</option>
                      <option value="GAMBITA / SANTANDER">GAMBITA / SANTANDER</option>
                      <option value="GAMEZA / BOYACA">GAMEZA / BOYACA</option>
                      <option value="GARAGOA / BOYACA">GARAGOA / BOYACA</option>
                      <option value="GARZON / HUILA">GARZON / HUILA</option>
                      <option value="GENOVA / QUINDIO">GENOVA / QUINDIO</option>
                      <option value="GIGANTE / HUILA">GIGANTE / HUILA</option>
                      <option value="GINEBRA / VALLE DEL CAUCA">GINEBRA / VALLE DEL CAUCA</option>
                      <option value="GIRALDO / ANTIOQUIA">GIRALDO / ANTIOQUIA</option>
                      <option value="GIRARDOT / CUNDINAMARCA">GIRARDOT / CUNDINAMARCA</option>
                      <option value="GIRARDOTA / ANTIOQUIA">GIRARDOTA / ANTIOQUIA</option>
                      <option value="GIRON / SANTANDER">GIRON / SANTANDER</option>
                      <option value="GOMEZ PLATA / ANTIOQUIA">GOMEZ PLATA / ANTIOQUIA</option>
                      <option value="GONZALEZ / CESAR">GONZALEZ / CESAR</option>
                      <option value="GRAMALOTE / N. DE SANTANDER">GRAMALOTE / N. DE SANTANDER</option>
                      <option value="GRANADA / ANTIOQUIA">GRANADA / ANTIOQUIA</option>
                      <option value="GRANADA / CUNDINAMARCA">GRANADA / CUNDINAMARCA</option>
                      <option value="GRANADA / META">GRANADA / META</option>
                      <option value="GÜEPSA / SANTANDER">GÜEPSA / SANTANDER</option>
                      <option value="GÜICAN / BOYACA">GÜICAN / BOYACA</option>
                      <option value="GUACA / SANTANDER">GUACA / SANTANDER</option>
                      <option value="GUACAMAYAS / BOYACA">GUACAMAYAS / BOYACA</option>
                      <option value="GUACARI / VALLE DEL CAUCA">GUACARI / VALLE DEL CAUCA</option>
                      <option value="GUACHENE / CAUCA">GUACHENE / CAUCA</option>
                      <option value="GUACHETA / CUNDINAMARCA">GUACHETA / CUNDINAMARCA</option>
                      <option value="GUACHUCAL / NARIÑO">GUACHUCAL / NARIÑO</option>
                      <option value="GUADALAJARA DE BUGA / VALLE DEL CAUCA">GUADALAJARA DE BUGA / VALLE DEL CAUCA</option>
                      <option value="GUADALUPE / ANTIOQUIA">GUADALUPE / ANTIOQUIA</option>
                      <option value="GUADALUPE / HUILA">GUADALUPE / HUILA</option>
                      <option value="GUADALUPE / SANTANDER">GUADALUPE / SANTANDER</option>
                      <option value="GUADUAS / CUNDINAMARCA">GUADUAS / CUNDINAMARCA</option>
                      <option value="GUAITARILLA / NARIÑO">GUAITARILLA / NARIÑO</option>
                      <option value="GUALMATAN / NARIÑO">GUALMATAN / NARIÑO</option>
                      <option value="GUAMAL / MAGDALENA">GUAMAL / MAGDALENA</option>
                      <option value="GUAMAL / META">GUAMAL / META</option>
                      <option value="GUAMO / TOLIMA">GUAMO / TOLIMA</option>
                      <option value="GUAPI / CAUCA">GUAPI / CAUCA</option>
                      <option value="GUAPOTA / SANTANDER">GUAPOTA / SANTANDER</option>
                      <option value="GUARANDA / SUCRE">GUARANDA / SUCRE</option>
                      <option value="GUARNE / ANTIOQUIA">GUARNE / ANTIOQUIA</option>
                      <option value="GUASCA / CUNDINAMARCA">GUASCA / CUNDINAMARCA</option>
                      <option value="GUATAPE / ANTIOQUIA">GUATAPE / ANTIOQUIA</option>
                      <option value="GUATAQUI / CUNDINAMARCA">GUATAQUI / CUNDINAMARCA</option>
                      <option value="GUATAVITA / CUNDINAMARCA">GUATAVITA / CUNDINAMARCA</option>
                      <option value="GUATEQUE / BOYACA">GUATEQUE / BOYACA</option>
                      <option value="GUATICA / RISARALDA">GUATICA / RISARALDA</option>
                      <option value="GUAVATA / SANTANDER">GUAVATA / SANTANDER</option>
                      <option value="GUAYABAL DE SIQUIMA / CUNDINAMARCA">GUAYABAL DE SIQUIMA / CUNDINAMARCA</option>
                      <option value="GUAYABETAL / CUNDINAMARCA">GUAYABETAL / CUNDINAMARCA</option>
                      <option value="GUAYATA / BOYACA">GUAYATA / BOYACA</option>
                      <option value="GUTIERREZ / CUNDINAMARCA">GUTIERREZ / CUNDINAMARCA</option>
                      <option value="HACARI / N. DE SANTANDER">HACARI / N. DE SANTANDER</option>
                      <option value="HATILLO DE LOBA / BOLIVAR">HATILLO DE LOBA / BOLIVAR</option>
                      <option value="HATO / SANTANDER">HATO / SANTANDER</option>
                      <option value="HATO COROZAL / CASANARE">HATO COROZAL / CASANARE</option>
                      <option value="HATONUEVO / LA GUAJIRA">HATONUEVO / LA GUAJIRA</option>
                      <option value="HELICONIA / ANTIOQUIA">HELICONIA / ANTIOQUIA</option>
                      <option value="HERRAN / N. DE SANTANDER">HERRAN / N. DE SANTANDER</option>
                      <option value="HERVEO / TOLIMA">HERVEO / TOLIMA</option>
                      <option value="HISPANIA / ANTIOQUIA">HISPANIA / ANTIOQUIA</option>
                      <option value="HOBO / HUILA">HOBO / HUILA</option>
                      <option value="HONDA / TOLIMA">HONDA / TOLIMA</option>
                      <option value="IBAGUE / TOLIMA">IBAGUE / TOLIMA</option>
                      <option value="ICONONZO / TOLIMA">ICONONZO / TOLIMA</option>
                      <option value="ILES / NARIÑO">ILES / NARIÑO</option>
                      <option value="IMUES / NARIÑO">IMUES / NARIÑO</option>
                      <option value="INIRIDA / GUAINIA">INIRIDA / GUAINIA</option>
                      <option value="INZA / CAUCA">INZA / CAUCA</option>
                      <option value="IPIALES / NARIÑO">IPIALES / NARIÑO</option>
                      <option value="IQUIRA / HUILA">IQUIRA / HUILA</option>
                      <option value="ISNOS / HUILA">ISNOS / HUILA</option>
                      <option value="ISTMINA / CHOCO">ISTMINA / CHOCO</option>
                      <option value="ITAGUI / ANTIOQUIA">ITAGUI / ANTIOQUIA</option>
                      <option value="ITUANGO / ANTIOQUIA">ITUANGO / ANTIOQUIA</option>
                      <option value="IZA / BOYACA">IZA / BOYACA</option>
                      <option value="JAMBALO / CAUCA">JAMBALO / CAUCA</option>
                      <option value="JAMUNDI / VALLE DEL CAUCA">JAMUNDI / VALLE DEL CAUCA</option>
                      <option value="JARDIN / ANTIOQUIA">JARDIN / ANTIOQUIA</option>
                      <option value="JENESANO / BOYACA">JENESANO / BOYACA</option>
                      <option value="JERICO / ANTIOQUIA">JERICO / ANTIOQUIA</option>
                      <option value="JERICO / BOYACA">JERICO / BOYACA</option>
                      <option value="JERUSALEN / CUNDINAMARCA">JERUSALEN / CUNDINAMARCA</option>
                      <option value="JESUS MARIA / SANTANDER">JESUS MARIA / SANTANDER</option>
                      <option value="JORDAN / SANTANDER">JORDAN / SANTANDER</option>
                      <option value="JUAN DE ACOSTA / ATLANTICO">JUAN DE ACOSTA / ATLANTICO</option>
                      <option value="JUNIN / CUNDINAMARCA">JUNIN / CUNDINAMARCA</option>
                      <option value="JURADO / CHOCO">JURADO / CHOCO</option>
                      <option value="LA APARTADA / CORDOBA">LA APARTADA / CORDOBA</option>
                      <option value="LA ARGENTINA / HUILA">LA ARGENTINA / HUILA</option>
                      <option value="LA BELLEZA / SANTANDER">LA BELLEZA / SANTANDER</option>
                      <option value="LA CALERA / CUNDINAMARCA">LA CALERA / CUNDINAMARCA</option>
                      <option value="LA CAPILLA / BOYACA">LA CAPILLA / BOYACA</option>
                      <option value="LA CEJA / ANTIOQUIA">LA CEJA / ANTIOQUIA</option>
                      <option value="LA CELIA / RISARALDA">LA CELIA / RISARALDA</option>
                      <option value="LA CHORRERA / AMAZONAS">LA CHORRERA / AMAZONAS</option>
                      <option value="LA CRUZ / NARIÑO">LA CRUZ / NARIÑO</option>
                      <option value="LA CUMBRE / VALLE DEL CAUCA">LA CUMBRE / VALLE DEL CAUCA</option>
                      <option value="LA DORADA / CALDAS">LA DORADA / CALDAS</option>
                      <option value="LA ESPERANZA / N. DE SANTANDER">LA ESPERANZA / N. DE SANTANDER</option>
                      <option value="LA ESTRELLA / ANTIOQUIA">LA ESTRELLA / ANTIOQUIA</option>
                      <option value="LA FLORIDA / NARIÑO">LA FLORIDA / NARIÑO</option>
                      <option value="LA GLORIA / CESAR">LA GLORIA / CESAR</option>
                      <option value="LA GUADALUPE / GUAINIA">LA GUADALUPE / GUAINIA</option>
                      <option value="LA JAGUA DE IBIRICO / CESAR">LA JAGUA DE IBIRICO / CESAR</option>
                      <option value="LA JAGUA DEL PILAR / LA GUAJIRA">LA JAGUA DEL PILAR / LA GUAJIRA</option>
                      <option value="LA LLANADA / NARIÑO">LA LLANADA / NARIÑO</option>
                      <option value="LA MACARENA / META">LA MACARENA / META</option>
                      <option value="LA MERCED / CALDAS">LA MERCED / CALDAS</option>
                      <option value="LA MESA / CUNDINAMARCA">LA MESA / CUNDINAMARCA</option>
                      <option value="LA MONTAÑITA / CAQUETA">LA MONTAÑITA / CAQUETA</option>
                      <option value="LA PALMA / CUNDINAMARCA">LA PALMA / CUNDINAMARCA</option>
                      <option value="LA PAZ / CESAR">LA PAZ / CESAR</option>
                      <option value="LA PAZ / SANTANDER">LA PAZ / SANTANDER</option>
                      <option value="LA PEDRERA / AMAZONAS">LA PEDRERA / AMAZONAS</option>
                      <option value="LA PEÑA / CUNDINAMARCA">LA PEÑA / CUNDINAMARCA</option>
                      <option value="LA PINTADA / ANTIOQUIA">LA PINTADA / ANTIOQUIA</option>
                      <option value="LA PLATA / HUILA">LA PLATA / HUILA</option>
                      <option value="LA PLAYA / N. DE SANTANDER">LA PLAYA / N. DE SANTANDER</option>
                      <option value="LA PRIMAVERA / VICHADA">LA PRIMAVERA / VICHADA</option>
                      <option value="LA SALINA / CASANARE">LA SALINA / CASANARE</option>
                      <option value="LA SIERRA / CAUCA">LA SIERRA / CAUCA</option>
                      <option value="LA TEBAIDA / QUINDIO">LA TEBAIDA / QUINDIO</option>
                      <option value="LA TOLA / NARIÑO">LA TOLA / NARIÑO</option>
                      <option value="LA UNION / ANTIOQUIA">LA UNION / ANTIOQUIA</option>
                      <option value="LA UNION / NARIÑO">LA UNION / NARIÑO</option>
                      <option value="LA UNION / SUCRE">LA UNION / SUCRE</option>
                      <option value="LA UNION / VALLE DEL CAUCA">LA UNION / VALLE DEL CAUCA</option>
                      <option value="LA UVITA / BOYACA">LA UVITA / BOYACA</option>
                      <option value="LA VEGA / CAUCA">LA VEGA / CAUCA</option>
                      <option value="LA VEGA / CUNDINAMARCA">LA VEGA / CUNDINAMARCA</option>
                      <option value="LA VICTORIA / BOYACA">LA VICTORIA / BOYACA</option>
                      <option value="LA VICTORIA / VALLE DEL CAUCA">LA VICTORIA / VALLE DEL CAUCA</option>
                      <option value="LA VICTORIA / AMAZONAS">LA VICTORIA / AMAZONAS</option>
                      <option value="LA VIRGINIA / RISARALDA">LA VIRGINIA / RISARALDA</option>
                      <option value="LABATECA / N. DE SANTANDER">LABATECA / N. DE SANTANDER</option>
                      <option value="LABRANZAGRANDE / BOYACA">LABRANZAGRANDE / BOYACA</option>
                      <option value="LANDAZURI / SANTANDER">LANDAZURI / SANTANDER</option>
                      <option value="LEBRIJA / SANTANDER">LEBRIJA / SANTANDER</option>
                      <option value="LEGUIZAMO / PUTUMAYO">LEGUIZAMO / PUTUMAYO</option>
                      <option value="LEIVA / NARIÑO">LEIVA / NARIÑO</option>
                      <option value="LEJANIAS / META">LEJANIAS / META</option>
                      <option value="LENGUAZAQUE / CUNDINAMARCA">LENGUAZAQUE / CUNDINAMARCA</option>
                      <option value="LERIDA / TOLIMA">LERIDA / TOLIMA</option>
                      <option value="LETICIA / AMAZONAS">LETICIA / AMAZONAS</option>
                      <option value="LIBANO / TOLIMA">LIBANO / TOLIMA</option>
                      <option value="LIBORINA / ANTIOQUIA">LIBORINA / ANTIOQUIA</option>
                      <option value="LINARES / NARIÑO">LINARES / NARIÑO</option>
                      <option value="LLORO / CHOCO">LLORO / CHOCO</option>
                      <option value="LOPEZ / CAUCA">LOPEZ / CAUCA</option>
                      <option value="LORICA / CORDOBA">LORICA / CORDOBA</option>
                      <option value="LOS ANDES / NARIÑO">LOS ANDES / NARIÑO</option>
                      <option value="LOS CORDOBAS / CORDOBA">LOS CORDOBAS / CORDOBA</option>
                      <option value="LOS PALMITOS / SUCRE">LOS PALMITOS / SUCRE</option>
                      <option value="LOS PATIOS / N. DE SANTANDER">LOS PATIOS / N. DE SANTANDER</option>
                      <option value="LOS SANTOS / SANTANDER">LOS SANTOS / SANTANDER</option>
                      <option value="LOURDES / N. DE SANTANDER">LOURDES / N. DE SANTANDER</option>
                      <option value="LURUACO / ATLANTICO">LURUACO / ATLANTICO</option>
                      <option value="MACANAL / BOYACA">MACANAL / BOYACA</option>
                      <option value="MACARAVITA / SANTANDER">MACARAVITA / SANTANDER</option>
                      <option value="MACEO / ANTIOQUIA">MACEO / ANTIOQUIA</option>
                      <option value="MACHETA / CUNDINAMARCA">MACHETA / CUNDINAMARCA</option>
                      <option value="MADRID / CUNDINAMARCA">MADRID / CUNDINAMARCA</option>
                      <option value="MAGANGUE / BOLIVAR">MAGANGUE / BOLIVAR</option>
                      <option value="MAGsI / NARIÑO">MAGsI / NARIÑO</option>
                      <option value="MAHATES / BOLIVAR">MAHATES / BOLIVAR</option>
                      <option value="MAICAO / LA GUAJIRA">MAICAO / LA GUAJIRA</option>
                      <option value="MAJAGUAL / SUCRE">MAJAGUAL / SUCRE</option>
                      <option value="MALAGA / SANTANDER">MALAGA / SANTANDER</option>
                      <option value="MALAMBO / ATLANTICO">MALAMBO / ATLANTICO</option>
                      <option value="MALLAMA / NARIÑO">MALLAMA / NARIÑO</option>
                      <option value="MANATI / ATLANTICO">MANATI / ATLANTICO</option>
                      <option value="MANAURE / CESAR">MANAURE / CESAR</option>
                      <option value="MANAURE / LA GUAJIRA">MANAURE / LA GUAJIRA</option>
                      <option value="MANI / CASANARE">MANI / CASANARE</option>
                      <option value="MANIZALES / CALDAS">MANIZALES / CALDAS</option>
                      <option value="MANTA / CUNDINAMARCA">MANTA / CUNDINAMARCA</option>
                      <option value="MANZANARES / CALDAS">MANZANARES / CALDAS</option>
                      <option value="MAPIRIPAN / META">MAPIRIPAN / META</option>
                      <option value="MAPIRIPANA / GUAINIA">MAPIRIPANA / GUAINIA</option>
                      <option value="MARGARITA / BOLIVAR">MARGARITA / BOLIVAR</option>
                      <option value="MARIA LA BAJA / BOLIVAR">MARIA LA BAJA / BOLIVAR</option>
                      <option value="MARINILLA / ANTIOQUIA">MARINILLA / ANTIOQUIA</option>
                      <option value="MARIPI / BOYACA">MARIPI / BOYACA</option>
                      <option value="MARIQUITA / TOLIMA">MARIQUITA / TOLIMA</option>
                      <option value="MARMATO / CALDAS">MARMATO / CALDAS</option>
                      <option value="MARQUETALIA / CALDAS">MARQUETALIA / CALDAS</option>
                      <option value="MARSELLA / RISARALDA">MARSELLA / RISARALDA</option>
                      <option value="MARULANDA / CALDAS">MARULANDA / CALDAS</option>
                      <option value="MATANZA / SANTANDER">MATANZA / SANTANDER</option>
                      <option value="MEDELLIN / ANTIOQUIA">MEDELLIN / ANTIOQUIA</option>
                      <option value="MEDINA / CUNDINAMARCA">MEDINA / CUNDINAMARCA</option>
                      <option value="MEDIO ATRATO / CHOCO">MEDIO ATRATO / CHOCO</option>
                      <option value="MEDIO BAUDO / CHOCO">MEDIO BAUDO / CHOCO</option>
                      <option value="MEDIO SAN JUAN / CHOCO">MEDIO SAN JUAN / CHOCO</option>
                      <option value="MELGAR / TOLIMA">MELGAR / TOLIMA</option>
                      <option value="MERCADERES / CAUCA">MERCADERES / CAUCA</option>
                      <option value="MESETAS / META">MESETAS / META</option>
                      <option value="MILAN / CAQUETA">MILAN / CAQUETA</option>
                      <option value="MIRAFLORES / BOYACA">MIRAFLORES / BOYACA</option>
                      <option value="MIRAFLORES / GUAVIARE">MIRAFLORES / GUAVIARE</option>
                      <option value="MIRANDA / CAUCA">MIRANDA / CAUCA</option>
                      <option value="MIRITI - PARANA / AMAZONAS">MIRITI - PARANA / AMAZONAS</option>
                      <option value="MISTRATO / RISARALDA">MISTRATO / RISARALDA</option>
                      <option value="MITU / VAUPES">MITU / VAUPES</option>
                      <option value="MOCOA / PUTUMAYO">MOCOA / PUTUMAYO</option>
                      <option value="MOGOTES / SANTANDER">MOGOTES / SANTANDER</option>
                      <option value="MOLAGAVITA / SANTANDER">MOLAGAVITA / SANTANDER</option>
                      <option value="MOMIL / CORDOBA">MOMIL / CORDOBA</option>
                      <option value="MOMPOS / BOLIVAR">MOMPOS / BOLIVAR</option>
                      <option value="MONGUA / BOYACA">MONGUA / BOYACA</option>
                      <option value="MONGUI / BOYACA">MONGUI / BOYACA</option>
                      <option value="MONIQUIRA / BOYACA">MONIQUIRA / BOYACA</option>
                      <option value="MONTEBELLO / ANTIOQUIA">MONTEBELLO / ANTIOQUIA</option>
                      <option value="MONTECRISTO / BOLIVAR">MONTECRISTO / BOLIVAR</option>
                      <option value="MONTELIBANO / CORDOBA">MONTELIBANO / CORDOBA</option>
                      <option value="MONTENEGRO / QUINDIO">MONTENEGRO / QUINDIO</option>
                      <option value="MONTERIA / CORDOBA">MONTERIA / CORDOBA</option>
                      <option value="MONTERREY / CASANARE">MONTERREY / CASANARE</option>
                      <option value="MOÑITOS / CORDOBA">MOÑITOS / CORDOBA</option>
                      <option value="MORALES / BOLIVAR">MORALES / BOLIVAR</option>
                      <option value="MORALES / CAUCA">MORALES / CAUCA</option>
                      <option value="MORELIA / CAQUETA">MORELIA / CAQUETA</option>
                      <option value="MORICHAL / GUAINIA">MORICHAL / GUAINIA</option>
                      <option value="MORROA / SUCRE">MORROA / SUCRE</option>
                      <option value="MOSQUERA / CUNDINAMARCA">MOSQUERA / CUNDINAMARCA</option>
                      <option value="MOSQUERA / NARIÑO">MOSQUERA / NARIÑO</option>
                      <option value="MOTAVITA / BOYACA">MOTAVITA / BOYACA</option>
                      <option value="MURILLO / TOLIMA">MURILLO / TOLIMA</option>
                      <option value="MURINDO / ANTIOQUIA">MURINDO / ANTIOQUIA</option>
                      <option value="MUTATA / ANTIOQUIA">MUTATA / ANTIOQUIA</option>
                      <option value="MUTISCUA / N. DE SANTANDER">MUTISCUA / N. DE SANTANDER</option>
                      <option value="MUZO / BOYACA">MUZO / BOYACA</option>
                      <option value="NARIÑO / ANTIOQUIA">NARIÑO / ANTIOQUIA</option>
                      <option value="NARIÑO / CUNDINAMARCA">NARIÑO / CUNDINAMARCA</option>
                      <option value="NARIÑO / NARIÑO">NARIÑO / NARIÑO</option>
                      <option value="NATAGA / HUILA">NATAGA / HUILA</option>
                      <option value="NATAGAIMA / TOLIMA">NATAGAIMA / TOLIMA</option>
                      <option value="NECHI / ANTIOQUIA">NECHI / ANTIOQUIA</option>
                      <option value="NECOCLI / ANTIOQUIA">NECOCLI / ANTIOQUIA</option>
                      <option value="NEIRA / CALDAS">NEIRA / CALDAS</option>
                      <option value="NEIVA / HUILA">NEIVA / HUILA</option>
                      <option value="NEMOCON / CUNDINAMARCA">NEMOCON / CUNDINAMARCA</option>
                      <option value="NILO / CUNDINAMARCA">NILO / CUNDINAMARCA</option>
                      <option value="NIMAIMA / CUNDINAMARCA">NIMAIMA / CUNDINAMARCA</option>
                      <option value="NOBSA / BOYACA">NOBSA / BOYACA</option>
                      <option value="NOCAIMA / CUNDINAMARCA">NOCAIMA / CUNDINAMARCA</option>
                      <option value="NORCASIA / CALDAS">NORCASIA / CALDAS</option>
                      <option value="NOROSI / BOLIVAR">NOROSI / BOLIVAR</option>
                      <option value="NOVITA / CHOCO">NOVITA / CHOCO</option>
                      <option value="NUEVA GRANADA / MAGDALENA">NUEVA GRANADA / MAGDALENA</option>
                      <option value="NUEVO COLON / BOYACA">NUEVO COLON / BOYACA</option>
                      <option value="NUNCHIA / CASANARE">NUNCHIA / CASANARE</option>
                      <option value="NUQUI / CHOCO">NUQUI / CHOCO</option>
                      <option value="OBANDO / VALLE DEL CAUCA">OBANDO / VALLE DEL CAUCA</option>
                      <option value="OCAMONTE / SANTANDER">OCAMONTE / SANTANDER</option>
                      <option value="OCAÑA / N. DE SANTANDER">OCAÑA / N. DE SANTANDER</option>
                      <option value="OIBA / SANTANDER">OIBA / SANTANDER</option>
                      <option value="OICATA / BOYACA">OICATA / BOYACA</option>
                      <option value="OLAYA / ANTIOQUIA">OLAYA / ANTIOQUIA</option>
                      <option value="OLAYA HERRERA / NARIÑO">OLAYA HERRERA / NARIÑO</option>
                      <option value="ONZAGA / SANTANDER">ONZAGA / SANTANDER</option>
                      <option value="OPORAPA / HUILA">OPORAPA / HUILA</option>
                      <option value="ORITO / PUTUMAYO">ORITO / PUTUMAYO</option>
                      <option value="OROCUE / CASANARE">OROCUE / CASANARE</option>
                      <option value="ORTEGA / TOLIMA">ORTEGA / TOLIMA</option>
                      <option value="OSPINA / NARIÑO">OSPINA / NARIÑO</option>
                      <option value="OTANCHE / BOYACA">OTANCHE / BOYACA</option>
                      <option value="OVEJAS / SUCRE">OVEJAS / SUCRE</option>
                      <option value="PACHAVITA / BOYACA">PACHAVITA / BOYACA</option>
                      <option value="PACHO / CUNDINAMARCA">PACHO / CUNDINAMARCA</option>
                      <option value="PACOA / VAUPES">PACOA / VAUPES</option>
                      <option value="PACORA / CALDAS">PACORA / CALDAS</option>
                      <option value="PADILLA / CAUCA">PADILLA / CAUCA</option>
                      <option value="PAEZ / BOYACA">PAEZ / BOYACA</option>
                      <option value="PAEZ / CAUCA">PAEZ / CAUCA</option>
                      <option value="PAICOL / HUILA">PAICOL / HUILA</option>
                      <option value="PAILITAS / CESAR">PAILITAS / CESAR</option>
                      <option value="PAIME / CUNDINAMARCA">PAIME / CUNDINAMARCA</option>
                      <option value="PAIPA / BOYACA">PAIPA / BOYACA</option>
                      <option value="PAJARITO / BOYACA">PAJARITO / BOYACA</option>
                      <option value="PALERMO / HUILA">PALERMO / HUILA</option>
                      <option value="PALESTINA / CALDAS">PALESTINA / CALDAS</option>
                      <option value="PALESTINA / HUILA">PALESTINA / HUILA</option>
                      <option value="PALMAR / SANTANDER">PALMAR / SANTANDER</option>
                      <option value="PALMAR DE VARELA / ATLANTICO">PALMAR DE VARELA / ATLANTICO</option>
                      <option value="PALMAS DEL SOCORRO / SANTANDER">PALMAS DEL SOCORRO / SANTANDER</option>
                      <option value="PALMIRA / VALLE DEL CAUCA">PALMIRA / VALLE DEL CAUCA</option>
                      <option value="PALMITO / SUCRE">PALMITO / SUCRE</option>
                      <option value="PALOCABILDO / TOLIMA">PALOCABILDO / TOLIMA</option>
                      <option value="PAMPLONA / N. DE SANTANDER">PAMPLONA / N. DE SANTANDER</option>
                      <option value="PAMPLONITA / N. DE SANTANDER">PAMPLONITA / N. DE SANTANDER</option>
                      <option value="PANA PANA / GUAINIA">PANA PANA / GUAINIA</option>
                      <option value="PANDI / CUNDINAMARCA">PANDI / CUNDINAMARCA</option>
                      <option value="PANQUEBA / BOYACA">PANQUEBA / BOYACA</option>
                      <option value="PAPUNAUA / VAUPES">PAPUNAUA / VAUPES</option>
                      <option value="PARAMO / SANTANDER">PARAMO / SANTANDER</option>
                      <option value="PARATEBUENO / CUNDINAMARCA">PARATEBUENO / CUNDINAMARCA</option>
                      <option value="PASCA / CUNDINAMARCA">PASCA / CUNDINAMARCA</option>
                      <option value="PASTO / NARIÑO">PASTO / NARIÑO</option>
                      <option value="PATIA / CAUCA">PATIA / CAUCA</option>
                      <option value="PAUNA / BOYACA">PAUNA / BOYACA</option>
                      <option value="PAYA / BOYACA">PAYA / BOYACA</option>
                      <option value="PAZ DE ARIPORO / CASANARE">PAZ DE ARIPORO / CASANARE</option>
                      <option value="PAZ DE RIO / BOYACA">PAZ DE RIO / BOYACA</option>
                      <option value="PEÐOL / ANTIOQUIA">PEÐOL / ANTIOQUIA</option>
                      <option value="PEDRAZA / MAGDALENA">PEDRAZA / MAGDALENA</option>
                      <option value="PELAYA / CESAR">PELAYA / CESAR</option>
                      <option value="PENSILVANIA / CALDAS">PENSILVANIA / CALDAS</option>
                      <option value="PEQUE / ANTIOQUIA">PEQUE / ANTIOQUIA</option>
                      <option value="PEREIRA / RISARALDA">PEREIRA / RISARALDA</option>
                      <option value="PESCA / BOYACA">PESCA / BOYACA</option>
                      <option value="PIAMONTE / CAUCA">PIAMONTE / CAUCA</option>
                      <option value="PIEDECUESTA / SANTANDER">PIEDECUESTA / SANTANDER</option>
                      <option value="PIEDRAS / TOLIMA">PIEDRAS / TOLIMA</option>
                      <option value="PIENDAMO / CAUCA">PIENDAMO / CAUCA</option>
                      <option value="PIJAO / QUINDIO">PIJAO / QUINDIO</option>
                      <option value="PIJIÑO DEL CARMEN / MAGDALENA">PIJIÑO DEL CARMEN / MAGDALENA</option>
                      <option value="PINCHOTE / SANTANDER">PINCHOTE / SANTANDER</option>
                      <option value="PINILLOS / BOLIVAR">PINILLOS / BOLIVAR</option>
                      <option value="PIOJO / ATLANTICO">PIOJO / ATLANTICO</option>
                      <option value="PISBA / BOYACA">PISBA / BOYACA</option>
                      <option value="PITAL / HUILA">PITAL / HUILA</option>
                      <option value="PITALITO / HUILA">PITALITO / HUILA</option>
                      <option value="PIVIJAY / MAGDALENA">PIVIJAY / MAGDALENA</option>
                      <option value="PLANADAS / TOLIMA">PLANADAS / TOLIMA</option>
                      <option value="PLANETA RICA / CORDOBA">PLANETA RICA / CORDOBA</option>
                      <option value="PLATO / MAGDALENA">PLATO / MAGDALENA</option>
                      <option value="POLICARPA / NARIÑO">POLICARPA / NARIÑO</option>
                      <option value="POLONUEVO / ATLANTICO">POLONUEVO / ATLANTICO</option>
                      <option value="PONEDERA / ATLANTICO">PONEDERA / ATLANTICO</option>
                      <option value="POPAYAN / CAUCA">POPAYAN / CAUCA</option>
                      <option value="PORE / CASANARE">PORE / CASANARE</option>
                      <option value="POTOSI / NARIÑO">POTOSI / NARIÑO</option>
                      <option value="PRADERA / VALLE DEL CAUCA">PRADERA / VALLE DEL CAUCA</option>
                      <option value="PRADO / TOLIMA">PRADO / TOLIMA</option>
                      <option value="PROVIDENCIA / NARIÑO">PROVIDENCIA / NARIÑO</option>
                      <option value="PROVIDENCIA / SAN ANDRES">PROVIDENCIA / SAN ANDRES</option>
                      <option value="PUEBLO BELLO / CESAR">PUEBLO BELLO / CESAR</option>
                      <option value="PUEBLO NUEVO / CORDOBA">PUEBLO NUEVO / CORDOBA</option>
                      <option value="PUEBLO RICO / RISARALDA">PUEBLO RICO / RISARALDA</option>
                      <option value="PUEBLORRICO / ANTIOQUIA">PUEBLORRICO / ANTIOQUIA</option>
                      <option value="PUEBLOVIEJO / MAGDALENA">PUEBLOVIEJO / MAGDALENA</option>
                      <option value="PUENTE NACIONAL / SANTANDER">PUENTE NACIONAL / SANTANDER</option>
                      <option value="PUERRES / NARIÑO">PUERRES / NARIÑO</option>
                      <option value="PUERTO ALEGRIA / AMAZONAS">PUERTO ALEGRIA / AMAZONAS</option>
                      <option value="PUERTO ARICA / AMAZONAS">PUERTO ARICA / AMAZONAS</option>
                      <option value="PUERTO ASIS / PUTUMAYO">PUERTO ASIS / PUTUMAYO</option>
                      <option value="PUERTO BERRIO / ANTIOQUIA">PUERTO BERRIO / ANTIOQUIA</option>
                      <option value="PUERTO BOYACA / BOYACA">PUERTO BOYACA / BOYACA</option>
                      <option value="PUERTO CAICEDO / PUTUMAYO">PUERTO CAICEDO / PUTUMAYO</option>
                      <option value="PUERTO CARREÑO / VICHADA">PUERTO CARREÑO / VICHADA</option>
                      <option value="PUERTO COLOMBIA / ATLANTICO">PUERTO COLOMBIA / ATLANTICO</option>
                      <option value="PUERTO COLOMBIA / GUAINIA">PUERTO COLOMBIA / GUAINIA</option>
                      <option value="PUERTO CONCORDIA / META">PUERTO CONCORDIA / META</option>
                      <option value="PUERTO ESCONDIDO / CORDOBA">PUERTO ESCONDIDO / CORDOBA</option>
                      <option value="PUERTO GAITAN / META">PUERTO GAITAN / META</option>
                      <option value="PUERTO GUZMAN / PUTUMAYO">PUERTO GUZMAN / PUTUMAYO</option>
                      <option value="PUERTO LIBERTADOR / CORDOBA">PUERTO LIBERTADOR / CORDOBA</option>
                      <option value="PUERTO LLERAS / META">PUERTO LLERAS / META</option>
                      <option value="PUERTO LOPEZ / META">PUERTO LOPEZ / META</option>
                      <option value="PUERTO NARE / ANTIOQUIA">PUERTO NARE / ANTIOQUIA</option>
                      <option value="PUERTO NARIÑO / AMAZONAS">PUERTO NARIÑO / AMAZONAS</option>
                      <option value="PUERTO PARRA / SANTANDER">PUERTO PARRA / SANTANDER</option>
                      <option value="PUERTO RICO / CAQUETA">PUERTO RICO / CAQUETA</option>
                      <option value="PUERTO RICO / META">PUERTO RICO / META</option>
                      <option value="PUERTO RONDON / ARAUCA">PUERTO RONDON / ARAUCA</option>
                      <option value="PUERTO SALGAR / CUNDINAMARCA">PUERTO SALGAR / CUNDINAMARCA</option>
                      <option value="PUERTO SANTANDER / N. DE SANTANDER">PUERTO SANTANDER / N. DE SANTANDER</option>
                      <option value="PUERTO SANTANDER / AMAZONAS">PUERTO SANTANDER / AMAZONAS</option>
                      <option value="PUERTO TEJADA / CAUCA">PUERTO TEJADA / CAUCA</option>
                      <option value="PUERTO TRIUNFO / ANTIOQUIA">PUERTO TRIUNFO / ANTIOQUIA</option>
                      <option value="PUERTO WILCHES / SANTANDER">PUERTO WILCHES / SANTANDER</option>
                      <option value="PULI / CUNDINAMARCA">PULI / CUNDINAMARCA</option>
                      <option value="PUPIALES / NARIÑO">PUPIALES / NARIÑO</option>
                      <option value="PURACE / CAUCA">PURACE / CAUCA</option>
                      <option value="PURIFICACION / TOLIMA">PURIFICACION / TOLIMA</option>
                      <option value="PURISIMA / CORDOBA">PURISIMA / CORDOBA</option>
                      <option value="QUEBRADANEGRA / CUNDINAMARCA">QUEBRADANEGRA / CUNDINAMARCA</option>
                      <option value="QUETAME / CUNDINAMARCA">QUETAME / CUNDINAMARCA</option>
                      <option value="QUIBDO / CHOCO">QUIBDO / CHOCO</option>
                      <option value="QUIMBAYA / QUINDIO">QUIMBAYA / QUINDIO</option>
                      <option value="QUINCHIA / RISARALDA">QUINCHIA / RISARALDA</option>
                      <option value="QUIPAMA / BOYACA">QUIPAMA / BOYACA</option>
                      <option value="QUIPILE / CUNDINAMARCA">QUIPILE / CUNDINAMARCA</option>
                      <option value="RAGONVALIA / N. DE SANTANDER">RAGONVALIA / N. DE SANTANDER</option>
                      <option value="RAMIRIQUI / BOYACA">RAMIRIQUI / BOYACA</option>
                      <option value="RAQUIRA / BOYACA">RAQUIRA / BOYACA</option>
                      <option value="RECETOR / CASANARE">RECETOR / CASANARE</option>
                      <option value="REGIDOR / BOLIVAR">REGIDOR / BOLIVAR</option>
                      <option value="REMEDIOS / ANTIOQUIA">REMEDIOS / ANTIOQUIA</option>
                      <option value="REMOLINO / MAGDALENA">REMOLINO / MAGDALENA</option>
                      <option value="REPELON / ATLANTICO">REPELON / ATLANTICO</option>
                      <option value="RESTREPO / META">RESTREPO / META</option>
                      <option value="RESTREPO / VALLE DEL CAUCA">RESTREPO / VALLE DEL CAUCA</option>
                      <option value="RETIRO / ANTIOQUIA">RETIRO / ANTIOQUIA</option>
                      <option value="RICAURTE / CUNDINAMARCA">RICAURTE / CUNDINAMARCA</option>
                      <option value="RICAURTE / NARIÑO">RICAURTE / NARIÑO</option>
                      <option value="RIO DE ORO / CESAR">RIO DE ORO / CESAR</option>
                      <option value="RIO IRO / CHOCO">RIO IRO / CHOCO</option>
                      <option value="RIO QUITO / CHOCO">RIO QUITO / CHOCO</option>
                      <option value="RIO VIEJO / BOLIVAR">RIO VIEJO / BOLIVAR</option>
                      <option value="RIOBLANCO / TOLIMA">RIOBLANCO / TOLIMA</option>
                      <option value="RIOFRIO / VALLE DEL CAUCA">RIOFRIO / VALLE DEL CAUCA</option>
                      <option value="RIOHACHA / LA GUAJIRA">RIOHACHA / LA GUAJIRA</option>
                      <option value="RIONEGRO / ANTIOQUIA">RIONEGRO / ANTIOQUIA</option>
                      <option value="RIONEGRO / SANTANDER">RIONEGRO / SANTANDER</option>
                      <option value="RIOSUCIO / CALDAS">RIOSUCIO / CALDAS</option>
                      <option value="RIOSUCIO / CHOCO">RIOSUCIO / CHOCO</option>
                      <option value="RISARALDA / CALDAS">RISARALDA / CALDAS</option>
                      <option value="RIVERA / HUILA">RIVERA / HUILA</option>
                      <option value="ROBERTO PAYAN / NARIÑO">ROBERTO PAYAN / NARIÑO</option>
                      <option value="ROLDANILLO / VALLE DEL CAUCA">ROLDANILLO / VALLE DEL CAUCA</option>
                      <option value="RONCESVALLES / TOLIMA">RONCESVALLES / TOLIMA</option>
                      <option value="RONDON/ BOYACA">RONDON/ BOYACA</option>
                      <option value="ROSAS / CAUCA">ROSAS / CAUCA</option>
                      <option value="ROVIRA / TOLIMA">ROVIRA / TOLIMA</option>
                      <option value="SABANA DE TORRES / SANTANDER">SABANA DE TORRES / SANTANDER</option>
                      <option value="SABANAGRANDE / ATLANTICO">SABANAGRANDE / ATLANTICO</option>
                      <option value="SABANALARGA / ANTIOQUIA">SABANALARGA / ANTIOQUIA</option>
                      <option value="SABANALARGA / ATLANTICO">SABANALARGA / ATLANTICO</option>
                      <option value="SABANALARGA / CASANARE">SABANALARGA / CASANARE</option>
                      <option value="SABANAS DE SAN ANGEL / MAGDALENA">SABANAS DE SAN ANGEL / MAGDALENA</option>
                      <option value="SABANETA / ANTIOQUIA">SABANETA / ANTIOQUIA</option>
                      <option value="SABOYA / BOYACA">SABOYA / BOYACA</option>
                      <option value="SACAMA / CASANARE">SACAMA / CASANARE</option>
                      <option value="SACHICA / BOYACA">SACHICA / BOYACA</option>
                      <option value="SAHAGUN / CORDOBA">SAHAGUN / CORDOBA</option>
                      <option value="SALADOBLANCO / HUILA">SALADOBLANCO / HUILA</option>
                      <option value="SALAMINA / CALDAS">SALAMINA / CALDAS</option>
                      <option value="SALAMINA / MAGDALENA">SALAMINA / MAGDALENA</option>
                      <option value="SALAZAR / N. DE SANTANDER">SALAZAR / N. DE SANTANDER</option>
                      <option value="SALDAÑA / TOLIMA">SALDAÑA / TOLIMA</option>
                      <option value="SALENTO / QUINDIO">SALENTO / QUINDIO</option>
                      <option value="SALGAR / ANTIOQUIA">SALGAR / ANTIOQUIA</option>
                      <option value="SAMACA / BOYACA">SAMACA / BOYACA</option>
                      <option value="SAMANA / CALDAS">SAMANA / CALDAS</option>
                      <option value="SAMANIEGO / NARIÑO">SAMANIEGO / NARIÑO</option>
                      <option value="SAMPUES / SUCRE">SAMPUES / SUCRE</option>
                      <option value="SAN AGUSTIN / HUILA">SAN AGUSTIN / HUILA</option>
                      <option value="SAN ALBERTO / CESAR">SAN ALBERTO / CESAR</option>
                      <option value="SAN ANDRES / SANTANDER">SAN ANDRES / SANTANDER</option>
                      <option value="SAN ANDRES / SAN ANDRES">SAN ANDRES / SAN ANDRES</option>
                      <option value="SAN ANDRES DE CUERQUIA / ANTIOQUIA">SAN ANDRES DE CUERQUIA / ANTIOQUIA</option>
                      <option value="SAN ANDRES DE TUMACO / NARIÑO">SAN ANDRES DE TUMACO / NARIÑO</option>
                      <option value="SAN ANDRES SOTAVENTO / CORDOBA">SAN ANDRES SOTAVENTO / CORDOBA</option>
                      <option value="SAN ANTERO / CORDOBA">SAN ANTERO / CORDOBA</option>
                      <option value="SAN ANTONIO / TOLIMA">SAN ANTONIO / TOLIMA</option>
                      <option value="SAN ANTONIO DEL TEQUENDAMA / CUNDINAMARCA">SAN ANTONIO DEL TEQUENDAMA / CUNDINAMARCA</option>
                      <option value="SAN BENITO / SANTANDER">SAN BENITO / SANTANDER</option>
                      <option value="SAN BENITO ABAD / SUCRE">SAN BENITO ABAD / SUCRE</option>
                      <option value="SAN BERNARDO / CUNDINAMARCA">SAN BERNARDO / CUNDINAMARCA</option>
                      <option value="SAN BERNARDO / NARIÑO">SAN BERNARDO / NARIÑO</option>
                      <option value="SAN BERNARDO DEL VIENTO / CORDOBA">SAN BERNARDO DEL VIENTO / CORDOBA</option>
                      <option value="SAN CALIXTO / N. DE SANTANDER">SAN CALIXTO / N. DE SANTANDER</option>
                      <option value="SAN CARLOS / ANTIOQUIA">SAN CARLOS / ANTIOQUIA</option>
                      <option value="SAN CARLOS / CORDOBA">SAN CARLOS / CORDOBA</option>
                      <option value="SAN CARLOS DE GUAROA / META">SAN CARLOS DE GUAROA / META</option>
                      <option value="SAN CAYETANO / CUNDINAMARCA">SAN CAYETANO / CUNDINAMARCA</option>
                      <option value="SAN CAYETANO / N. DE SANTANDER">SAN CAYETANO / N. DE SANTANDER</option>
                      <option value="SAN CRISTOBAL / BOLIVAR">SAN CRISTOBAL / BOLIVAR</option>
                      <option value="SAN DIEGO / CESAR">SAN DIEGO / CESAR</option>
                      <option value="SAN EDUARDO / BOYACA">SAN EDUARDO / BOYACA</option>
                      <option value="SAN ESTANISLAO / BOLIVAR">SAN ESTANISLAO / BOLIVAR</option>
                      <option value="SAN FELIPE / GUAINIA">SAN FELIPE / GUAINIA</option>
                      <option value="SAN FERNANDO / BOLIVAR">SAN FERNANDO / BOLIVAR</option>
                      <option value="SAN FRANCISCO / ANTIOQUIA">SAN FRANCISCO / ANTIOQUIA</option>
                      <option value="SAN FRANCISCO / CUNDINAMARCA">SAN FRANCISCO / CUNDINAMARCA</option>
                      <option value="SAN FRANCISCO / PUTUMAYO">SAN FRANCISCO / PUTUMAYO</option>
                      <option value="SAN GIL / SANTANDER">SAN GIL / SANTANDER</option>
                      <option value="SAN JACINTO / BOLIVAR">SAN JACINTO / BOLIVAR</option>
                      <option value="SAN JACINTO DEL CAUCA / BOLIVAR">SAN JACINTO DEL CAUCA / BOLIVAR</option>
                      <option value="SAN JERONIMO / ANTIOQUIA">SAN JERONIMO / ANTIOQUIA</option>
                      <option value="SAN JOAQUIN / SANTANDER">SAN JOAQUIN / SANTANDER</option>
                      <option value="SAN JOSE / CALDAS">SAN JOSE / CALDAS</option>
                      <option value="SAN JOSE DE LA MONTAÑA / ANTIOQUIA">SAN JOSE DE LA MONTAÑA / ANTIOQUIA</option>
                      <option value="SAN JOSE DE MIRANDA / SANTANDER">SAN JOSE DE MIRANDA / SANTANDER</option>
                      <option value="SAN JOSE DE PARE / BOYACA">SAN JOSE DE PARE / BOYACA</option>
                      <option value="SAN JOSE DEL FRAGUA / CAQUETA">SAN JOSE DEL FRAGUA / CAQUETA</option>
                      <option value="SAN JOSE DEL GUAVIARE / GUAVIARE">SAN JOSE DEL GUAVIARE / GUAVIARE</option>
                      <option value="SAN JOSE DEL PALMAR / CHOCO">SAN JOSE DEL PALMAR / CHOCO</option>
                      <option value="SAN JUAN DE ARAMA / META">SAN JUAN DE ARAMA / META</option>
                      <option value="SAN JUAN DE BETULIA / SUCRE">SAN JUAN DE BETULIA / SUCRE</option>
                      <option value="SAN JUAN DE RIO SECO / CUNDINAMARCA">SAN JUAN DE RIO SECO / CUNDINAMARCA</option>
                      <option value="SAN JUAN DE URABA / ANTIOQUIA">SAN JUAN DE URABA / ANTIOQUIA</option>
                      <option value="SAN JUAN DEL CESAR / LA GUAJIRA">SAN JUAN DEL CESAR / LA GUAJIRA</option>
                      <option value="SAN JUAN NEPOMUCENO / BOLIVAR">SAN JUAN NEPOMUCENO / BOLIVAR</option>
                      <option value="SAN JUANITO / META">SAN JUANITO / META</option>
                      <option value="SAN LORENZO / NARIÑO">SAN LORENZO / NARIÑO</option>
                      <option value="SAN LUIS / ANTIOQUIA">SAN LUIS / ANTIOQUIA</option>
                      <option value="SAN LUIS / TOLIMA">SAN LUIS / TOLIMA</option>
                      <option value="SAN LUIS DE GACENO / BOYACA">SAN LUIS DE GACENO / BOYACA</option>
                      <option value="SAN LUIS DE PALENQUE / CASANARE">SAN LUIS DE PALENQUE / CASANARE</option>
                      <option value="SAN LUIS DE SINCE / SUCRE">SAN LUIS DE SINCE / SUCRE</option>
                      <option value="SAN MARCOS / SUCRE">SAN MARCOS / SUCRE</option>
                      <option value="SAN MARTIN / CESAR">SAN MARTIN / CESAR</option>
                      <option value="SAN MARTIN / META">SAN MARTIN / META</option>
                      <option value="SAN MARTIN DE LOBA / BOLIVAR">SAN MARTIN DE LOBA / BOLIVAR</option>
                      <option value="SAN MATEO / BOYACA">SAN MATEO / BOYACA</option>
                      <option value="SAN MIGUEL / SANTANDER">SAN MIGUEL / SANTANDER</option>
                      <option value="SAN MIGUEL / PUTUMAYO">SAN MIGUEL / PUTUMAYO</option>
                      <option value="SAN MIGUEL DE SEMA / BOYACA">SAN MIGUEL DE SEMA / BOYACA</option>
                      <option value="SAN ONOFRE / SUCRE">SAN ONOFRE / SUCRE</option>
                      <option value="SAN PABLO / BOLIVAR">SAN PABLO / BOLIVAR</option>
                      <option value="SAN PABLO / NARIÑO">SAN PABLO / NARIÑO</option>
                      <option value="SAN PABLO DE BORBUR / BOYACA">SAN PABLO DE BORBUR / BOYACA</option>
                      <option value="SAN PEDRO / ANTIOQUIA">SAN PEDRO / ANTIOQUIA</option>
                      <option value="SAN PEDRO / SUCRE">SAN PEDRO / SUCRE</option>
                      <option value="SAN PEDRO / VALLE DEL CAUCA">SAN PEDRO / VALLE DEL CAUCA</option>
                      <option value="SAN PEDRO DE CARTAGO / NARIÑO">SAN PEDRO DE CARTAGO / NARIÑO</option>
                      <option value="SAN PEDRO DE URABA / ANTIOQUIA">SAN PEDRO DE URABA / ANTIOQUIA</option>
                      <option value="SAN PELAYO / CORDOBA">SAN PELAYO / CORDOBA</option>
                      <option value="SAN RAFAEL / ANTIOQUIA">SAN RAFAEL / ANTIOQUIA</option>
                      <option value="SAN ROQUE / ANTIOQUIA">SAN ROQUE / ANTIOQUIA</option>
                      <option value="SAN SEBASTIAN / CAUCA">SAN SEBASTIAN / CAUCA</option>
                      <option value="SAN SEBASTIAN DE BUENAVISTA / MAGDALENA">SAN SEBASTIAN DE BUENAVISTA / MAGDALENA</option>
                      <option value="SAN VICENTE / ANTIOQUIA">SAN VICENTE / ANTIOQUIA</option>
                      <option value="SAN VICENTE DE CHUCURI / SANTANDER">SAN VICENTE DE CHUCURI / SANTANDER</option>
                      <option value="SAN VICENTE DEL CAGUAN / CAQUETA">SAN VICENTE DEL CAGUAN / CAQUETA</option>
                      <option value="SAN ZENON / MAGDALENA">SAN ZENON / MAGDALENA</option>
                      <option value="SANDONA / NARIÑO">SANDONA / NARIÑO</option>
                      <option value="SANTA ANA /MAGDALENA">SANTA ANA /MAGDALENA</option>
                      <option value="SANTA BARBARA / ANTIOQUIA">SANTA BARBARA / ANTIOQUIA</option>
                      <option value="SANTA BARBARA / NARIÑO">SANTA BARBARA / NARIÑO</option>
                      <option value="SANTA BARBARA / SANTANDER">SANTA BARBARA / SANTANDER</option>
                      <option value="SANTA BARBARA DE PINTO / MAGDALENA">SANTA BARBARA DE PINTO / MAGDALENA</option>
                      <option value="SANTA CATALINA / BOLIVAR">SANTA CATALINA / BOLIVAR</option>
                      <option value="SANTA HELENA DEL OPON / SANTANDER">SANTA HELENA DEL OPON / SANTANDER</option>
                      <option value="SANTA ISABEL / TOLIMA">SANTA ISABEL / TOLIMA</option>
                      <option value="SANTA LUCIA / ATLANTICO">SANTA LUCIA / ATLANTICO</option>
                      <option value="SANTA MARIA / BOYACA">SANTA MARIA / BOYACA</option>
                      <option value="SANTA MARIA / HUILA">SANTA MARIA / HUILA</option>
                      <option value="SANTA MARTA / MAGDALENA">SANTA MARTA / MAGDALENA</option>
                      <option value="SANTA ROSA / BOLIVAR">SANTA ROSA / BOLIVAR</option>
                      <option value="SANTA ROSA / CAUCA">SANTA ROSA / CAUCA</option>
                      <option value="SANTA ROSA DE CABAL / RISARALDA">SANTA ROSA DE CABAL / RISARALDA</option>
                      <option value="SANTA ROSA DE OSOS / ANTIOQUIA">SANTA ROSA DE OSOS / ANTIOQUIA</option>
                      <option value="SANTA ROSA DE VITERBO / BOYACA">SANTA ROSA DE VITERBO / BOYACA</option>
                      <option value="SANTA ROSA DEL SUR / BOLIVAR">SANTA ROSA DEL SUR / BOLIVAR</option>
                      <option value="SANTA ROSALIA / VICHADA">SANTA ROSALIA / VICHADA</option>
                      <option value="SANTA SOFIA / BOYACA">SANTA SOFIA / BOYACA</option>
                      <option value="SANTACRUZ / NARIÑO">SANTACRUZ / NARIÑO</option>
                      <option value="SANTAFE DE ANTIOQUIA / ANTIOQUIA">SANTAFE DE ANTIOQUIA / ANTIOQUIA</option>
                      <option value="SANTANA / BOYACA">SANTANA / BOYACA</option>
                      <option value="SANTANDER DE QUILICHAO / CAUCA">SANTANDER DE QUILICHAO / CAUCA</option>
                      <option value="SANTIAGO / N. DE SANTANDER">SANTIAGO / N. DE SANTANDER</option>
                      <option value="SANTIAGO / PUTUMAYO">SANTIAGO / PUTUMAYO</option>
                      <option value="SANTIAGO DE TOLU / SUCRE">SANTIAGO DE TOLU / SUCRE</option>
                      <option value="SANTO DOMINGO / ANTIOQUIA">SANTO DOMINGO / ANTIOQUIA</option>
                      <option value="SANTO TOMAS / ATLANTICO">SANTO TOMAS / ATLANTICO</option>
                      <option value="SANTUARIO / RISARALDA">SANTUARIO / RISARALDA</option>
                      <option value="SAPUYES / NARIÑO">SAPUYES / NARIÑO</option>
                      <option value="SARAVENA / ARAUCA">SARAVENA / ARAUCA</option>
                      <option value="SARDINATA / N. DE SANTANDER">SARDINATA / N. DE SANTANDER</option>
                      <option value="SASAIMA / CUNDINAMARCA">SASAIMA / CUNDINAMARCA</option>
                      <option value="SATIVANORTE / BOYACA">SATIVANORTE / BOYACA</option>
                      <option value="SATIVASUR / BOYACA">SATIVASUR / BOYACA</option>
                      <option value="SEGOVIA / ANTIOQUIA">SEGOVIA / ANTIOQUIA</option>
                      <option value="SESQUILE / CUNDINAMARCA">SESQUILE / CUNDINAMARCA</option>
                      <option value="SEVILLA / VALLE DEL CAUCA">SEVILLA / VALLE DEL CAUCA</option>
                      <option value="SIACHOQUE / BOYACA">SIACHOQUE / BOYACA</option>
                      <option value="SIBATE / CUNDINAMARCA">SIBATE / CUNDINAMARCA</option>
                      <option value="SIBUNDOY / PUTUMAYO">SIBUNDOY / PUTUMAYO</option>
                      <option value="SILOS / N. DE SANTANDER">SILOS / N. DE SANTANDER</option>
                      <option value="SILVANIA / CUNDINAMARCA">SILVANIA / CUNDINAMARCA</option>
                      <option value="SILVIA / CAUCA">SILVIA / CAUCA</option>
                      <option value="SIMACOTA / SANTANDER">SIMACOTA / SANTANDER</option>
                      <option value="SIMIJACA / CUNDINAMARCA">SIMIJACA / CUNDINAMARCA</option>
                      <option value="SIMITI / BOLIVAR">SIMITI / BOLIVAR</option>
                      <option value="SINCELEJO / SUCRE">SINCELEJO / SUCRE</option>
                      <option value="SIPI / CHOCO">SIPI / CHOCO</option>
                      <option value="SITIONUEVO / MAGDALENA">SITIONUEVO / MAGDALENA</option>
                      <option value="SOACHA / CUNDINAMARCA">SOACHA / CUNDINAMARCA</option>
                      <option value="SOATA / BOYACA">SOATA / BOYACA</option>
                      <option value="SOCHA / BOYACA">SOCHA / BOYACA</option>
                      <option value="SOCORRO / SANTANDER">SOCORRO / SANTANDER</option>
                      <option value="SOCOTA / BOYACA">SOCOTA / BOYACA</option>
                      <option value="SOGAMOSO / BOYACA">SOGAMOSO / BOYACA</option>
                      <option value="SOLANO / CAQUETA">SOLANO / CAQUETA</option>
                      <option value="SOLEDAD / ATLANTICO">SOLEDAD / ATLANTICO</option>
                      <option value="SOLITA / CAQUETA">SOLITA / CAQUETA</option>
                      <option value="SOMONDOCO / BOYACA">SOMONDOCO / BOYACA</option>
                      <option value="SONSON / ANTIOQUIA">SONSON / ANTIOQUIA</option>
                      <option value="SOPETRAN / ANTIOQUIA">SOPETRAN / ANTIOQUIA</option>
                      <option value="SOPLAVIENTO / BOLIVAR">SOPLAVIENTO / BOLIVAR</option>
                      <option value="SOPO / CUNDINAMARCA">SOPO / CUNDINAMARCA</option>
                      <option value="SORA / BOYACA">SORA / BOYACA</option>
                      <option value="SORACA / BOYACA">SORACA / BOYACA</option>
                      <option value="SOTAQUIRA / BOYACA">SOTAQUIRA / BOYACA</option>
                      <option value="SOTARA / CAUCA">SOTARA / CAUCA</option>
                      <option value="SUAITA / SANTANDER">SUAITA / SANTANDER</option>
                      <option value="SUAN / ATLANTICO">SUAN / ATLANTICO</option>
                      <option value="SUAREZ / CAUCA">SUAREZ / CAUCA</option>
                      <option value="SUAREZ / TOLIMA">SUAREZ / TOLIMA</option>
                      <option value="SUAZA / HUILA">SUAZA / HUILA</option>
                      <option value="SUBACHOQUE / CUNDINAMARCA">SUBACHOQUE / CUNDINAMARCA</option>
                      <option value="SUCRE / CAUCA">SUCRE / CAUCA</option>
                      <option value="SUCRE / SANTANDER">SUCRE / SANTANDER</option>
                      <option value="SUCRE / SUCRE">SUCRE / SUCRE</option>
                      <option value="SUESCA / CUNDINAMARCA">SUESCA / CUNDINAMARCA</option>
                      <option value="SUPATA / CUNDINAMARCA">SUPATA / CUNDINAMARCA</option>
                      <option value="SUPIA / CALDAS">SUPIA / CALDAS</option>
                      <option value="SURATA / SANTANDER">SURATA / SANTANDER</option>
                      <option value="SUSA / CUNDINAMARCA">SUSA / CUNDINAMARCA</option>
                      <option value="SUSACON / BOYACA">SUSACON / BOYACA</option>
                      <option value="SUTAMARCHAN / BOYACA">SUTAMARCHAN / BOYACA</option>
                      <option value="SUTATAUSA / CUNDINAMARCA">SUTATAUSA / CUNDINAMARCA</option>
                      <option value="SUTATENZA / BOYACA">SUTATENZA / BOYACA</option>
                      <option value="TABIO / CUNDINAMARCA">TABIO / CUNDINAMARCA</option>
                      <option value="TADO / CHOCO">TADO / CHOCO</option>
                      <option value="TALAIGUA NUEVO / BOLIVAR">TALAIGUA NUEVO / BOLIVAR</option>
                      <option value="TAMALAMEQUE / CESAR">TAMALAMEQUE / CESAR</option>
                      <option value="TAMARA / CASANARE">TAMARA / CASANARE</option>
                      <option value="TAME / ARAUCA">TAME / ARAUCA</option>
                      <option value="TAMESIS / ANTIOQUIA">TAMESIS / ANTIOQUIA</option>
                      <option value="TAMINANGO / NARIÑO">TAMINANGO / NARIÑO</option>
                      <option value="TANGUA / NARIÑO">TANGUA / NARIÑO</option>
                      <option value="TARAIRA / VAUPES">TARAIRA / VAUPES</option>
                      <option value="TARAPACA / AMAZONAS">TARAPACA / AMAZONAS</option>
                      <option value="TARAZA / ANTIOQUIA">TARAZA / ANTIOQUIA</option>
                      <option value="TARQUI / HUILA">TARQUI / HUILA</option>
                      <option value="TARSO / ANTIOQUIA">TARSO / ANTIOQUIA</option>
                      <option value="TASCO / BOYACA">TASCO / BOYACA</option>
                      <option value="TAURAMENA / CASANARE">TAURAMENA / CASANARE</option>
                      <option value="TAUSA / CUNDINAMARCA">TAUSA / CUNDINAMARCA</option>
                      <option value="TELLO / HUILA">TELLO / HUILA</option>
                      <option value="TENA / CUNDINAMARCA">TENA / CUNDINAMARCA</option>
                      <option value="TENERIFE / MAGDALENA">TENERIFE / MAGDALENA</option>
                      <option value="TENJO / CUNDINAMARCA">TENJO / CUNDINAMARCA</option>
                      <option value="TENZA / BOYACA">TENZA / BOYACA</option>
                      <option value="TEORAMA / N. DE SANTANDER">TEORAMA / N. DE SANTANDER</option>
                      <option value="TERUEL / HUILA">TERUEL / HUILA</option>
                      <option value="TESALIA / HUILA">TESALIA / HUILA</option>
                      <option value="TIBACUY / CUNDINAMARCA">TIBACUY / CUNDINAMARCA</option>
                      <option value="TIBANA / BOYACA">TIBANA / BOYACA</option>
                      <option value="TIBASOSA / BOYACA">TIBASOSA / BOYACA</option>
                      <option value="TIBIRITA / CUNDINAMARCA">TIBIRITA / CUNDINAMARCA</option>
                      <option value="TIBU / N. DE SANTANDER">TIBU / N. DE SANTANDER</option>
                      <option value="TIERRALTA / CORDOBA">TIERRALTA / CORDOBA</option>
                      <option value="TIMANA / HUILA">TIMANA / HUILA</option>
                      <option value="TIMBIO / CAUCA">TIMBIO / CAUCA</option>
                      <option value="TIMBIQUI / CAUCA">TIMBIQUI / CAUCA</option>
                      <option value="TINJACA / BOYACA">TINJACA / BOYACA</option>
                      <option value="TIPACOQUE / BOYACA">TIPACOQUE / BOYACA</option>
                      <option value="TIQUISIO / BOLIVAR">TIQUISIO / BOLIVAR</option>
                      <option value="TITIRIBI / ANTIOQUIA">TITIRIBI / ANTIOQUIA</option>
                      <option value="TOCA / BOYACA">TOCA / BOYACA</option>
                      <option value="TOCAIMA / CUNDINAMARCA">TOCAIMA / CUNDINAMARCA</option>
                      <option value="TOCANCIPA / CUNDINAMARCA">TOCANCIPA / CUNDINAMARCA</option>
                      <option value="TOGsI / BOYACA">TOGsI / BOYACA</option>
                      <option value="TOLEDO / ANTIOQUIA">TOLEDO / ANTIOQUIA</option>
                      <option value="TOLEDO / N. DE SANTANDER">TOLEDO / N. DE SANTANDER</option>
                      <option value="TOLU VIEJO / SUCRE">TOLU VIEJO / SUCRE</option>
                      <option value="TONA / SANTANDER">TONA / SANTANDER</option>
                      <option value="TOPAGA / BOYACA">TOPAGA / BOYACA</option>
                      <option value="TOPAIPI / CUNDINAMARCA">TOPAIPI / CUNDINAMARCA</option>
                      <option value="TORIBIO / CAUCA">TORIBIO / CAUCA</option>
                      <option value="TORO / VALLE DEL CAUCA">TORO / VALLE DEL CAUCA</option>
                      <option value="TOTA / BOYACA">TOTA / BOYACA</option>
                      <option value="TOTORO / CAUCA">TOTORO / CAUCA</option>
                      <option value="TRINIDAD / CASANARE">TRINIDAD / CASANARE</option>
                      <option value="TRUJILLO / VALLE DEL CAUCA">TRUJILLO / VALLE DEL CAUCA</option>
                      <option value="TUBARA / ATLANTICO">TUBARA / ATLANTICO</option>
                      <option value="TULUA / VALLE DEL CAUCA">TULUA / VALLE DEL CAUCA</option>
                      <option value="TUNJA / BOYACA">TUNJA / BOYACA</option>
                      <option value="TUNUNGUA / BOYACA">TUNUNGUA / BOYACA</option>
                      <option value="TUQUERRES / NARIÑO">TUQUERRES / NARIÑO</option>
                      <option value="TURBACO / BOLIVAR">TURBACO / BOLIVAR</option>
                      <option value="TURBANA / BOLIVAR">TURBANA / BOLIVAR</option>
                      <option value="TURBO / ANTIOQUIA">TURBO / ANTIOQUIA</option>
                      <option value="TURMEQUE / BOYACA">TURMEQUE / BOYACA</option>
                      <option value="TUTA / BOYACA">TUTA / BOYACA</option>
                      <option value="TUTAZA / BOYACA">TUTAZA / BOYACA</option>
                      <option value="UBALA / CUNDINAMARCA">UBALA / CUNDINAMARCA</option>
                      <option value="UBAQUE / CUNDINAMARCA">UBAQUE / CUNDINAMARCA</option>
                      <option value="ULLOA / VALLE DEL CAUCA">ULLOA / VALLE DEL CAUCA</option>
                      <option value="UMBITA / BOYACA">UMBITA / BOYACA</option>
                      <option value="UNE / CUNDINAMARCA">UNE / CUNDINAMARCA</option>
                      <option value="UNGUIA / CHOCO">UNGUIA / CHOCO</option>
                      <option value="UNION PANAMERICANA / CHOCO">UNION PANAMERICANA / CHOCO</option>
                      <option value="URAMITA / ANTIOQUIA">URAMITA / ANTIOQUIA</option>
                      <option value="URIBE / META">URIBE / META</option>
                      <option value="URIBIA / LA GUAJIRA">URIBIA / LA GUAJIRA</option>
                      <option value="URRAO / ANTIOQUIA">URRAO / ANTIOQUIA</option>
                      <option value="URUMITA / LA GUAJIRA">URUMITA / LA GUAJIRA</option>
                      <option value="USIACURI / ATLANTICO">USIACURI / ATLANTICO</option>
                      <option value="UTICA / CUNDINAMARCA">UTICA / CUNDINAMARCA</option>
                      <option value="VALDIVIA / ANTIOQUIA">VALDIVIA / ANTIOQUIA</option>
                      <option value="VALENCIA / CORDOBA">VALENCIA / CORDOBA</option>
                      <option value="VALLE DE SAN JOSE / SANTANDER">VALLE DE SAN JOSE / SANTANDER</option>
                      <option value="VALLE DE SAN JUAN / TOLIMA">VALLE DE SAN JUAN / TOLIMA</option>
                      <option value="VALLE DEL GUAMUEZ / PUTUMAYO">VALLE DEL GUAMUEZ / PUTUMAYO</option>
                      <option value="VALLEDUPAR / CESAR">VALLEDUPAR / CESAR</option>
                      <option value="VALPARAISO / ANTIOQUIA">VALPARAISO / ANTIOQUIA</option>
                      <option value="VALPARAISO / CAQUETA">VALPARAISO / CAQUETA</option>
                      <option value="VEGACHI / ANTIOQUIA">VEGACHI / ANTIOQUIA</option>
                      <option value="VELEZ / SANTANDER">VELEZ / SANTANDER</option>
                      <option value="VENADILLO / TOLIMA">VENADILLO / TOLIMA</option>
                      <option value="VENECIA / ANTIOQUIA">VENECIA / ANTIOQUIA</option>
                      <option value="VENECIA / CUNDINAMARCA">VENECIA / CUNDINAMARCA</option>
                      <option value="VENTAQUEMADA / BOYACA">VENTAQUEMADA / BOYACA</option>
                      <option value="VERGARA / CUNDINAMARCA">VERGARA / CUNDINAMARCA</option>
                      <option value="VERSALLES / VALLE DEL CAUCA">VERSALLES / VALLE DEL CAUCA</option>
                      <option value="VETAS / SANTANDER">VETAS / SANTANDER</option>
                      <option value="VIANI / CUNDINAMARCA">VIANI / CUNDINAMARCA</option>
                      <option value="VICTORIA / CALDAS">VICTORIA / CALDAS</option>
                      <option value="VIGIA DEL FUERTE / ANTIOQUIA">VIGIA DEL FUERTE / ANTIOQUIA</option>
                      <option value="VIJES / VALLE DEL CAUCA">VIJES / VALLE DEL CAUCA</option>
                      <option value="VILLA CARO / N. DE SANTANDER">VILLA CARO / N. DE SANTANDER</option>
                      <option value="VILLA DE LEYVA / BOYACA">VILLA DE LEYVA / BOYACA</option>
                      <option value="VILLA DE SAN DIEGO DE UBATE / CUNDINAMARCA">VILLA DE SAN DIEGO DE UBATE / CUNDINAMARCA</option>
                      <option value="VILLA DEL ROSARIO / N. DE SANTANDER">VILLA DEL ROSARIO / N. DE SANTANDER</option>
                      <option value="VILLA RICA / CAUCA">VILLA RICA / CAUCA</option>
                      <option value="VILLAGARZON / PUTUMAYO">VILLAGARZON / PUTUMAYO</option>
                      <option value="VILLAGOMEZ / CUNDINAMARCA">VILLAGOMEZ / CUNDINAMARCA</option>
                      <option value="VILLAHERMOSA / TOLIMA">VILLAHERMOSA / TOLIMA</option>
                      <option value="VILLAMARIA / CALDAS">VILLAMARIA / CALDAS</option>
                      <option value="VILLANUEVA / BOLIVAR">VILLANUEVA / BOLIVAR</option>
                      <option value="VILLANUEVA / LA GUAJIRA">VILLANUEVA / LA GUAJIRA</option>
                      <option value="VILLANUEVA / SANTANDER">VILLANUEVA / SANTANDER</option>
                      <option value="VILLANUEVA / CASANARE">VILLANUEVA / CASANARE</option>
                      <option value="VILLAPINZON / CUNDINAMARCA">VILLAPINZON / CUNDINAMARCA</option>
                      <option value="VILLARRICA / TOLIMA">VILLARRICA / TOLIMA</option>
                      <option value="VILLAVICENCIO / META">VILLAVICENCIO / META</option>
                      <option value="VILLAVIEJA / HUILA">VILLAVIEJA / HUILA</option>
                      <option value="VILLETA / CUNDINAMARCA">VILLETA / CUNDINAMARCA</option>
                      <option value="VIOTA / CUNDINAMARCA">VIOTA / CUNDINAMARCA</option>
                      <option value="VIRACACHA / BOYACA">VIRACACHA / BOYACA</option>
                      <option value="VISTAHERMOSA / META">VISTAHERMOSA / META</option>
                      <option value="VITERBO / CALDAS">VITERBO / CALDAS</option>
                      <option value="YACOPI / CUNDINAMARCA">YACOPI / CUNDINAMARCA</option>
                      <option value="YACUANQUER / NARIÑO">YACUANQUER / NARIÑO</option>
                      <option value="YAGUARA / HUILA">YAGUARA / HUILA</option>
                      <option value="YALI / ANTIOQUIA">YALI / ANTIOQUIA</option>
                      <option value="YARUMAL / ANTIOQUIA">YARUMAL / ANTIOQUIA</option>
                      <option value="YAVARATE / VAUPES">YAVARATE / VAUPES</option>
                      <option value="YOLOMBO / ANTIOQUIA">YOLOMBO / ANTIOQUIA</option>
                      <option value="YONDO / ANTIOQUIA">YONDO / ANTIOQUIA</option>
                      <option value="YOPAL / CASANARE">YOPAL / CASANARE</option>
                      <option value="YOTOCO / VALLE DEL CAUCA">YOTOCO / VALLE DEL CAUCA</option>
                      <option value="YUMBO / VALLE DEL CAUCA">YUMBO / VALLE DEL CAUCA</option>
                      <option value="ZAMBRANO / BOLIVAR">ZAMBRANO / BOLIVAR</option>
                      <option value="ZAPATOCA / SANTANDER">ZAPATOCA / SANTANDER</option>
                      <option value="ZAPAYAN / MAGDALENA">ZAPAYAN / MAGDALENA</option>
                      <option value="ZARAGOZA / ANTIOQUIA">ZARAGOZA / ANTIOQUIA</option>
                      <option value="ZARZAL / VALLE DEL CAUCA">ZARZAL / VALLE DEL CAUCA</option>
                      <option value="ZETAQUIRA / BOYACA">ZETAQUIRA / BOYACA</option>
                      <option value="ZIPACON / CUNDINAMARCA">ZIPACON / CUNDINAMARCA</option>
                      <option value="ZIPAQUIRA / CUNDINAMARCA">ZIPAQUIRA / CUNDINAMARCA</option>
                      <option value="ZONA BANANERA / MAGDALENA">ZONA BANANERA / MAGDALENA</option>
                    </select>
                  </div>
                </div>

                <input type="hidden" name="id_zonas" value="<?php echo $registro['id_zonas']; ?>">
                <input type="hidden" name="nit" value="<?php echo $_SESSION["empresas_nit"];  ?>">
                  
                <div class="form-row mt-4">
                  <div class="col-sm-12 col-md-12 text-center">
                    <button type="submit" class="botonreg">Guardar</button>
                    <button type="button" onClick="location.href='zonas.php'" class="botoncan">Cancelar</button>
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
