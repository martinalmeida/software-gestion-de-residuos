<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../../index.php");
}

?>

<?php
require '../../php/conexion_bd.php';

$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM usuarios WHERE usuario_id=".$_SESSION["id"];
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ECOTEC | Software</title>
  
  <link rel="icon" href="../../img/icono.ico" type="image/x-icon">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../../css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../../css/mdb.min.css">
  <!-- Custom fonts for this template-->
  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../../css/sb-admin-2.min.css" rel="stylesheet">
  <!-- Hoja de estilos personalizada -->
  <link rel="stylesheet" href="../../css/estilos-gerente.css">


</head>
<body>
	<center>

      <div class="row">
        <div class="col-sm-12 col-md-12">
          <h4 class="vista-previa mt-3">Vista Previa</h4>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-12 mt-3">
          <button class="btn btn-danger" style="background-color: #AD0B00 !important; border-color: #AD0B00 !important; font-size: 0.8rem !important;" onclick="downloadDoc()">Descargar PDF</button>
          <a class="btn text-light" style="background-color: #76a03f; font-size: 0.8rem !important;" href="javascript:cerrar();">Listo <i class="far fa-check-circle"></i></a>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12 col-md-12">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 animated fadeInUp"><b>Usuarios</b></h1>
          </div>
        </div>
      </div>

	     
	  <table class="table-striped table-bordered" id="tabledata">
	  <thead style="background-color: #76a03f"> 
	      <tr>                   
            <th class="text-light font-weight-bold" width="110">Usuario</th>
            <th class="text-light font-weight-bold" width="110">Correo Electronico</th> 
            <th class="text-light font-weight-bold" width="110">Rol</th>
            <th class="text-light font-weight-bold" width="110">Nombre</th>
            <th class="text-light font-weight-bold" width="110">Identificación</th>
            <th class="text-light font-weight-bold" width="110">Cargo</th>           
            <th class="text-light font-weight-bold" width="110">Estado</th>  
            <th class="text-light font-weight-bold" width="110">Celular</th>
            <th class="text-light font-weight-bold" width="110">Pais</th>
            <th class="text-light font-weight-bold" width="110">Ciudad</th>
            <th class="text-light font-weight-bold" width="110">Fecha de Vencimiento</th>
            <th class="text-light font-weight-bold" width="110">NIT de la empresa</th>     
	      </tr>
	  </thead>
	  <tbody>
	      <?php                            
	      foreach($data as $dat) {                                 
	      ?>
	      <tr>    
            <td width="110" class="text-dark font-weight-bold"><?php echo $dat['usuario'] ?></td>
            <td width="110" class="text-dark font-weight-bold"><?php echo $dat['correo'] ?></td>
            <td width="110" class="text-dark font-weight-bold"><?php if($dat['rol']==1){ //gerencial
                                                                echo "Gerencial";
                                                                }else
                                                                if($dat['rol']==2){ //admin
                                                                echo "Administrador";
                                                                }else
                                                                if($dat['rol']==3){ //cliente
                                                                echo "Cliente";
                                                                }  ?></td> 
            <td width="110" class="text-dark font-weight-bold"><?php echo $dat['nombre'] ?></td>
            <td width="110" class="text-dark font-weight-bold"><?php echo $dat['identificacion'] ?></td>
            <td width="110" class="text-dark font-weight-bold"><?php echo $dat['cargo'] ?></td>
            <td width="110" class="text-dark font-weight-bold"><?php echo $dat['estado'] ?></td>
            <td width="110" class="text-dark font-weight-bold"><?php echo $dat['celular'] ?></td>
            <td width="110" class="text-dark font-weight-bold"><?php echo $dat['pais'] ?></td>
            <td width="110" class="text-dark font-weight-bold"><?php echo $dat['ciudad'] ?></td>
            <td width="110" class="text-dark font-weight-bold"><?php echo $dat['fecha_venc'] ?></td>
            <td width="50" class="text-dark font-weight-bold"><?php echo $dat['empresas_nit'] ?></td>
	      </tr>
	      <?php
	          }
	      ?>                                
	  </tbody>        
	 </table> 
	 </center> 
</body>
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script type="text/javascript" src="../../plugins/pdf/js/pdfmake.min.js"></script>
  <script type="text/javascript" src="../../plugins/pdf/js/html2canvas.min.js"></script>
  <script type="text/javascript">
  function downloadDoc(){

  html2canvas($("#tabledata")[0],{
    onrendered:function(canvas){
      var data=canvas.toDataURL();
      var docDefinition={
        content:[{
          image:data,
          width:500
        }]
      };
      pdfMake.createPdf(docDefinition).download("tabla.pdf");
    }
  })



    }


  </script>
  <script language="javascript" type="text/javascript"> 
	function cerrar() { 
	   window.open('','_parent',''); 
	   window.close(); 
	} 
  </script>
</html>