<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ECOTEC | Software</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/icono.ico" type="image/x-icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Hoja de estilos personalizada -->
    <link rel="stylesheet" href="css/estilos-admin.css">
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">   
  </head>
  <body class="fondo_img">


  <div class="container">
    <div class="frame">
      <div class="nav">
        <ul class="links">
          <li class="signin-active"><a class="btn">Iniciar Sesión</a></li>
          <li class="signup-inactive"><a class="btn"><i class="fas fa-users-cog"></i></a></li>
        </ul>
      </div>
      <div ng-app ng-init="checked = false">
        <form class="form-signin" id="form2" action="" method="post">
            <label for="username">Usuario</label>
            <input class="form-styling" type="text" name="usuario" id="usuario2" placeholder=""/>
            <label for="password">Contraseña</label>
            <input class="form-styling" type="password" name="contraseña" id="contrasena2" placeholder=""/>
            <input type="checkbox" id="checkbox" onclick="myFunction()"/>
            <label class="letra" for="checkbox"><span class="ui"></span>Ver Contraseña</label>
            <button type="submit" class="btn-signup">Iniciar Sesión</button>
        </form>
          
        <form class="form-signup" id="form" action="" method="post">
            <label for="fullname">Usuario</label>
            <input class="form-styling" type="text" id="usuario" name="usuario" />
            <label for="password2">Contraseña</label>
            <input class="form-styling" type="password" name="contrasena" id="contrasena" />
            <input type="checkbox" id="checkbox2" onclick="myFunction2()"/>
            <label class="letra" for="checkbox2"><span class="ui"></span>Ver Contraseña</label>
            <button type="submit" name="submit" class="btn-signup">Iniciar Sesión</button>
        </form>
          <div  class="success">
          </div>

        </div>
        <div class="forgot">
        </div>
    </div>
  </div>



    <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- plugins modal js -->
    <script src="plugins/sweetalert2/sweetalert2.all.min.js"></script>  
    <!-- Estilos personalizados -->
    <script type="text/javascript" src="js/estilos-admin.js"></script>
  </body>
</html>
