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
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="plugins/sweetalert2/sweetalert2.min.css">   
  </head>
  <body>

  <h1>Olap Cliente</h1>



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
    <script type="text/javascript" src="js/estilos.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript">
    $(function() {
        $(".btn").click(function() {
          $(".form-signin").toggleClass("form-signin-left");
          $(".form-signup").toggleClass("form-signup-left");
          $(".frame").toggleClass("frame-long");
          $(".signup-inactive").toggleClass("signup-active");
          $(".signin-active").toggleClass("signin-inactive");
          $(".forgot").toggleClass("forgot-left");   
          $(this).removeClass("idle").addClass("active");
        });
      });


    function myFunction() {
    var x = document.getElementById("myInput");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
    }


    function myFunction2() {
    var x = document.getElementById("contrasena");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
    }
    </script>
  </body>
</html>
