<?php require_once "vistas-pdf/vista_superior.php"?>

<?php
require '../../php/conexion_bd.php';

$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM usuarios WHERE empresas_nit=".$_SESSION["empresas_nit"];
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$data=$resultado->fetchAll(PDO::FETCH_ASSOC);
?>


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
          <h1 class="h3 mb-0 text-gray-800 animated fadeInUp mt-3"><b>Mis usuarios</b></h1>
        </div>
      </div>
    </div>
    
	     
	  <table class="table-striped table-bordered" id="tabledata">
	  <thead style="background-color: #76a03f"> 
	      <tr>
            <th class="text-light font-weight-font-weight-small" width="79">Usuario</th>
            <th class="text-light font-weight-font-weight-small" width="79">Correo Electronico</th>              
            <th class="text-light font-weight-font-weight-small" width="79">Rol</th>
            <th class="text-light font-weight-font-weight-small" width="79">Nombre</th>
            <th class="text-light font-weight-font-weight-small" width="79">Identificación</th>
            <th class="text-light font-weight-font-weight-small" width="79">Cargo</th>   
            <th class="text-light font-weight-font-weight-small" width="79">Estado</th>   
            <th class="text-light font-weight-font-weight-small" width="79">Modulo</th>                           
            <th class="text-light font-weight-font-weight-small" width="79">Tipo</th>
            <th class="text-light font-weight-font-weight-small" width="79">Telefono</th>    
            <th class="text-light font-weight-font-weight-small" width="79">Celular</th>
            <th class="text-light font-weight-font-weight-small" width="79">Pais</th>
            <th class="text-light font-weight-font-weight-small" width="79">Ciudad</th>
            <th class="text-light font-weight-font-weight-small" width="79">Dirección</th>
            <th class="text-light font-weight-font-weight-small" width="79">Licencia</th>
            <th class="text-light font-weight-font-weight-small" width="79">Fecha de Vencimiento</th>
	      </tr>
	  </thead>
	  <tbody>
	      <?php                            
	      foreach($data as $dat) {                                 
	      ?>
	      <tr>
	            <td width="79" class="text-dark font-weight-small"><?php echo $dat['usuario'] ?></td>
	            <td width="79" class="text-dark font-weight-small"><?php echo $dat['correo'] ?></td>
	            <td width="79" class="text-dark font-weight-small"><?php if($dat['rol']==1){ //gerencial
	                                                                echo "Gerencial";
	                                                                }else
	                                                                if($dat['rol']==2){ //admin
	                                                                echo "Administrador";
	                                                                }else
	                                                                if($dat['rol']==3){ //cliente
	                                                                echo "Cliente";
	                                                                }  ?></td> 
	            <td width="79" class="text-dark font-weight-small"><?php echo $dat['nombre'] ?></td>
	            <td width="79" class="text-dark font-weight-small"><?php echo $dat['identificacion'] ?></td>
	            <td width="79" class="text-dark font-weight-small"><?php echo $dat['cargo'] ?></td>
	            <td width="79" class="text-dark font-weight-small"><?php echo $dat['estado'] ?></td>
	            <td width="79" class="text-dark font-weight-small"><?php echo $dat['modulo'] ?></td>
	            <td width="79" class="text-dark font-weight-small"><?php echo $dat['propio'] ?></td>
	            <td width="79" class="text-dark font-weight-small"><?php echo $dat['telefono'] ?></td>
	            <td width="79" class="text-dark font-weight-small"><?php echo $dat['celular'] ?></td>
	            <td width="79" class="text-dark font-weight-small"><?php echo $dat['pais'] ?></td>
	            <td width="79" class="text-dark font-weight-small"><?php echo $dat['ciudad'] ?></td>
	            <td width="79" class="text-dark font-weight-small"><?php echo $dat['direccion'] ?></td>
	            <td width="79" class="text-dark font-weight-small"><?php echo $dat['licencia'] ?></td>
	            <td width="79" class="text-dark font-weight-small"><?php echo $dat['fecha_venc'] ?></td>
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
      	pageSize: 'A5',
      	pageOrientation: 'landscape',
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