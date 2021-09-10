<?php require_once "vistas-pdf/vista_superior.php"?>

<?php
require '../../php/conexion_bd.php';

$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM chequeos WHERE nit=".$_SESSION["empresas_nit"];
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
            <h1 class="h3 mb-0 text-gray-800 animated fadeInUp"><b>Elementos de chequeo</b></h1>
          </div>
        </div>
      </div>
	     
	  <table class="table-striped table-bordered" id="tabledata">
	  <thead style="background-color: #76a03f"> 
	      <tr>                   
            <th class="text-light font-weight-bold" width="220">Chequeo</th>
            <th class="text-light font-weight-bold" width="220">Estado</th>              
            <th class="text-light font-weight-bold" width="220">Tipo de respuesta</th>
            <th class="text-light font-weight-bold" width="220">Obligatoriedad</th>
            <th class="text-light font-weight-bold" width="220">Verificación</th>
            <th class="text-light font-weight-bold" width="220">Sección</th>      
	      </tr>
	  </thead>
	  <tbody>
	      <?php                            
	      foreach($data as $dat) {                                 
	      ?>
	      <tr>    
            <td width="220" class="text-dark font-weight-bold"><?php echo $dat['chequeo'] ?></td>
            <td width="220" class="text-dark font-weight-bold"><?php echo $dat['estado'] ?></td>
            <td width="220" class="text-dark font-weight-bold"><?php echo $dat['tipo_respuesta'] ?></td>
            <td width="220" class="text-dark font-weight-bold"><?php echo $dat['obligatoriedad'] ?></td>
            <td width="220" class="text-dark font-weight-bold"><?php echo $dat['verificacion'] ?></td>
            <td width="220" class="text-dark font-weight-bold"><?php echo $dat['seccion'] ?></td>
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