<?php require_once "vistas-pdf/vista_superior.php"?>

<?php
require '../../php/conexion_bd.php';

$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM clientes WHERE nit=".$_SESSION["empresas_nit"];
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
          <h1 class="h3 mb-0 text-gray-800 animated fadeInUp"><b>Mis Clientes</b></h1>
        </div>
      </div>
    </div>
	     
	  <table class="table-striped table-bordered" id="tabledata">
	  <thead style="background-color: #76a03f"> 
	      <tr> 
	          	<th class="text-light font-weight-small" width="6">Razón social / Nombre</th>        
	            <th class="text-light font-weight-small" width="6">Categoria</th>  
	            <th class="text-light font-weight-small" width="6">Tipo de identificación</th>
	            <th class="text-light font-weight-small" width="6">Identificacion</th>
	            <th class="text-light font-weight-small" width="6">Representante</th>                
	            <th class="text-light font-weight-small" width="6">telefono</th>  
	            <th class="text-light font-weight-small" width="6">Direccion Administrativa</th>
	            <th class="text-light font-weight-small" width="6">Direccion Corresponsal</th>
	            <th class="text-light font-weight-small" width="6">Pais</th>
	            <th class="text-light font-weight-small" width="6">Ciudad</th>                       
	            <th class="text-light font-weight-small" width="6">Actividad Economica</th>
	            <th class="text-light font-weight-small" width="6">Cotizacion</th>
	            <th class="text-light font-weight-small" width="6">Horario lv</th>
	            <th class="text-light font-weight-small" width="6">Horario sd</th>
	            <th class="text-light font-weight-small" width="6">Asesor</th>                       
	            <th class="text-light font-weight-small" width="6">Contacto General</th>  
	            <th class="text-light font-weight-small" width="6">Correo General</th>
	            <th class="text-light font-weight-small" width="6">Contacto Comercial</th>
	            <th class="text-light font-weight-small" width="6">Correo Comercial</th>       
	      </tr>
	  </thead>
	  <tbody>
	      <?php                            
	      foreach($data as $dat) {                                 
	      ?>
	      <tr>
	          	<td width="6" class="text-dark font-weight-small"><?php echo $dat['nombre'] ?></td>
                <td width="6" class="text-dark font-weight-small"><?php echo $dat['categoria'] ?></td>
                <td width="6" class="text-dark font-weight-small"><?php echo $dat['tipo_ident'] ?></td> 
                <td width="6" class="text-dark font-weight-small"><?php echo $dat['identificacion'] ?>
                <?php if ($dat['digito'] == "0"){ ?>
                   <?php echo $dat['digito'] = "" ?>
                <?php }else{ ?>
                  - <?php echo $dat['digito'] ?></td>
                <?php } ?>
                <td width="6" class="text-dark font-weight-small"><?php echo $dat['representante'] ?></td>
                <td width="6" class="text-dark font-weight-small"><?php echo $dat['telefono'] ?></td>
                <td width="6" class="text-dark font-weight-small"><?php echo $dat['direccion_admin'] ?></td>
                <td width="6" class="text-dark font-weight-small"><?php echo $dat['direccion_corres'] ?></td>
                <td width="6" class="text-dark font-weight-small"><?php echo $dat['pais'] ?></td>
                <td width="6" class="text-dark font-weight-small"><?php echo $dat['ciudad'] ?></td>
                <td width="6" class="text-dark font-weight-small"><?php echo $dat['acti_eco'] ?></td> 
                <td width="6" class="text-dark font-weight-small"><?php echo $dat['cotizacion'] ?></td>
                <td width="6" class="text-dark font-weight-small"><?php echo $dat['horario_lv'] ?>-<?php echo $dat['horario_lv1'] ?></td>
                <td width="6" class="text-dark font-weight-small"><?php echo $dat['horario_sd'] ?>-<?php echo $dat['horario_sd1'] ?></td>
                <td width="6" class="text-dark font-weight-small"><?php echo $dat['asesor'] ?></td>
                <td width="6" class="text-dark font-weight-small"><?php echo $dat['contacto_gen'] ?></td>
                <td width="6" class="text-dark font-weight-small"><?php echo $dat['correo_gen'] ?></td>
                <td width="6" class="text-dark font-weight-small"><?php echo $dat['contacto_com'] ?></td>
                <td width="6" class="text-dark font-weight-small"><?php echo $dat['correo_com'] ?></td>
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