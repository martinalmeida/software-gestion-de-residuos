<?php 
	
	include("../gerente/conexion_bd.php");

	ob_start();
	session_start();

	if($_SESSION["usuario2"] == null){
	    header("Location: ../index.php");
	}

	require_once('../plugins/mpdf/vendor/autoload.php');

    //CSS de la plantilla
	$css = file_get_contents('plantilla_acta/style.css');

    include("../gerente/conexion_bd.php");
    $query="SELECT * FROM actas WHERE id=".$_GET['id'];
    $resultado=mysqli_query($mysqli,$query);
    $registro=mysqli_fetch_array($resultado); 

 ?>

	<!DOCTYPE html>
	<html lang="en">
	  <head>
	    <meta charset="utf-8">
	    <link rel="icon" href="../img/icono.ico" type="image/x-icon">
	  </head>

	  <body>
	    <header class="clearfix">
	      <div id="logo">
	        <?php 
	        $query="SELECT logo_file FROM empresas WHERE nit=".$_SESSION["empresas_nit"];
		    $resultado=mysqli_query($mysqli,$query);
		    $consulta=mysqli_fetch_array($resultado);
	        echo '<img src="'.$consulta['logo_file'].'" width="90" height="80">';
	         ?>
	        <h2 style="text-align: center; color: #217b1c"> MANIFIESTO DE RECOLECCIÓN DE RESIDUOS INDUSTRIALES NUMERO <b style="color: #AF2A0D"><?php echo $registro['num_manifiesto']; ?></b> </h2>
	      </div>
	      <div id="company" style="margin-top: 16px">
	      	<table>
		      	<thead>
		      		<tr>
		      			<th class="nu n "><b>CIUDAD:</b> <b class="negro"><?php echo $registro['ciudad']; ?></b></th>
		      			<th class="n "><b>FECHA: </b> <b class="negro"><?php echo $registro['fecha']; ?></b></th>
		      			<th class="n "><b>ID: </b> <b class="negro">
		      			<?php 
		      				if ($registro['id_manifiesto'] == 0) {
		      					echo "";
		      				}else{
		      					echo $registro['id_manifiesto']; 
		      				}
		      			?>	
		      			</b></th>
		      		</tr>
		      		<tr>
		      			<th class="nu n "><b>ENTIDAD:</b> <b class="negro"><?php echo $registro['entidad']; ?></b></th>
		      			<th class="nu n "><b>EQUIPO:</b> <b class="negro"><?php echo $registro['equipo']; ?></b></th>
		      			<th class="n "><b>PLACA VEHICULO: </b> <b class="negro"><?php echo $registro['placa_vehiculo']; ?></b></th>
		      		</tr>
		      		<tr>
		      			<th class="nu n "><b>CONDUCTOR OPERATIVO:</b> <b class="negro"><?php echo $registro['conductor_operativo']; ?></b></th>
		      			<th class="n "><b>HORA RECOLECCIÓN: </b> <b class="negro"><?php echo $registro['hora_recoleccion']; ?></b></th>
		      		</tr>
		      	</thead>
	      	</table>
	      </div>
	    </header>
	    <main>
	      
	      <div style="margin-left: 170px;">
	      	<table>
	        <thead>
	          <tr>
	            <th class="desc res"><b>RESIDUOS RECEPCIONADOS</b></th>
	            <th class="res"><b>CANTIDAD</b></th>
	          </tr>
	        </thead>
	        <tbody>

	        	<!-- Material Absorvente -->
	        	<?php 
	        	if ($registro['nombre_material'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['nombre_material']; ?></td>
			            <td class="unit"><?php echo $registro['material_cantidad'].$registro['material_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			        <?php $num1 = $registro['material_cantidad']?>  
	         	<?php }else{
	         		echo "";
	         		$num1 = 0;
	         	} ?>


	         	<!-- Plástico Contaminante -->
	         	<?php 
	        	if ($registro['nombre_plastico'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['nombre_plastico']; ?></td>
			            <td class="unit"><?php echo $registro['plastico_cantidad'].$registro['plastico_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num2 = $registro['plastico_cantidad'] ?>
	         	<?php }else{
	         		echo "";
	         		$num2 = 0;
	         	} ?>


	         	<!-- Lodos Aceitosos -->
	         	<?php 
	        	if ($registro['nombre_lodos'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['nombre_lodos']; ?></td>
			            <td class="unit"><?php echo $registro['lodos_cantidad'].$registro['lodos_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num3 = $registro['lodos_cantidad'] ?>
	         	<?php }else{
	         		echo "";
	         		$num3 = 0;
	         	} ?>


	         	<!-- Cartón contaminado -->
	         	<?php 
	        	if ($registro['nombre_carton'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['nombre_carton']; ?></td>
			            <td class="unit"><?php echo $registro['carton_cantidad'].$registro['carton_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num4 = $registro['carton_cantidad'] ?>
	         	<?php }else{
	         		echo "";
	         		$num4 = 0;
	         	} ?>

	         	<!-- Vidrio contaminado -->
	         	<?php 
	        	if ($registro['nombre_vidrio'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['nombre_vidrio']; ?></td>
			            <td class="unit"><?php echo $registro['vidrio_cantidad'].$registro['vidrio_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num5 = $registro['vidrio_cantidad'] ?>
	         	<?php }else{
	         		echo "";
	         		$num5 = 0;
	         	} ?>


	         	<!-- Metales -->
	         	<?php 
	        	if ($registro['nombre_metales'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['nombre_metales']; ?></td>
			            <td class="unit"><?php echo $registro['metales_cantidad'].$registro['metales_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num6 = $registro['metales_cantidad'] ?>
	         	<?php }else{
	         		echo "";
	         		$num6 = 0;
	         	} ?>


	         	<!-- Filtros -->
	         	<?php 
	        	if ($registro['nombre_filtros'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['nombre_filtros']; ?></td>
			            <td class="unit"><?php echo $registro['filtros_cantidad'].$registro['filtros_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num7 = $registro['filtros_cantidad'] ?>
	         	<?php }else{
	         		echo "";
	         		$num7 = 0;
	         	} ?>


	         	<!-- Aceites Industriales -->
	         	<?php 
	        	if ($registro['nombre_aceites'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['nombre_aceites']; ?></td>
			            <td class="unit"><?php echo $registro['aceites_cantidad'].$registro['aceites_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num8 = $registro['aceites_cantidad'] ?>
	         	<?php }else{
	         		echo "";
	         		$num8 = 0;
	         	} ?>


	         	<!-- Solventes -->
	         	<?php 
	        	if ($registro['nombre_solventes'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['nombre_solventes']; ?></td>
			            <td class="unit"><?php echo $registro['solventes_cantidad'].$registro['solventes_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num9 = $registro['solventes_cantidad'] ?>
	         	<?php }else{
	         		echo "";
	         		$num9 = 0;
	         	} ?>


	         	<!-- Residuo Químico -->
	         	<?php 
	        	if ($registro['nombre_residuo'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['nombre_residuo']; ?></td>
			            <td class="unit"><?php echo $registro['residuo_cantidad'].$registro['residuo_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num10 = $registro['residuo_cantidad'] ?>
	         	<?php }else{
	         		echo "";
	         		$num10 = 0;
	         	} ?>


	         	<!-- Fluorescentes -->
	         	<?php 
	        	if ($registro['nombre_fluorescente'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['nombre_fluorescente']; ?></td>
			            <td class="unit"><?php echo $registro['fluorescente_cantidad'].$registro['fluorescente_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num11 = $registro['fluorescente_cantidad'] ?>
	         	<?php }else{
	         		echo "";
	         		$num11 = 0;
	         	} ?>


	         	<!-- Baterías -->
	         	<?php 
	        	if ($registro['nombre_bateria'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['nombre_bateria']; ?></td>
			            <td class="unit"><?php echo $registro['bateria_cantidad'].$registro['bateria_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num12 = $registro['bateria_cantidad'] ?>
	         	<?php }else{
	         		echo "";
	         		$num12 = 0;
	         	} ?>


	         	<!-- Pilas -->
	         	<?php 
	        	if ($registro['nombre_pila'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['nombre_pila']; ?></td>
			            <td class="unit"><?php echo $registro['pila_cantidad'].$registro['pila_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num13 = $registro['pila_cantidad'] ?>
	         	<?php }else{
	         		echo "";
	         		$num13 = 0;
	         	} ?>


	         	<!-- Residuos Orgánicos -->
	         	<?php 
	        	if ($registro['nombre_r_organico'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['nombre_r_organico']; ?></td>
			            <td class="unit"><?php echo $registro['r_organico_cantidad'].$registro['r_organico_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num14 = $registro['r_organico_cantidad'] ?>
	         	<?php }else{
	         		echo "";
	         		$num14 = 0;
	         	} ?>


	         	<!-- Residuos Ordinarios -->
	         	<?php 
	        	if ($registro['nombre_r_ordinario'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['nombre_r_ordinario']; ?></td>
			            <td class="unit"><?php echo $registro['r_ordinario_cantidad'].$registro['r_ordinario_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num15 = $registro['r_ordinario_cantidad'] ?>
	         	<?php }else{
	         		echo "";
	         		$num15 = 0;
	         	} ?>


	         	<!-- Residuos Reciclables -->
	         	<?php 
	        	if ($registro['nombre_r_reciclable'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['nombre_r_reciclable']; ?></td>
			            <td class="unit"><?php echo $registro['r_reciclable_cantidad'].$registro['r_reciclable_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num16 = $registro['r_reciclable_cantidad'] ?>
	         	<?php }else{
	         		echo "";
	         		$num16 = 0;
	         	} ?>


	         	<!-- Residuos Cortopunzantes -->
	         	<?php 
	        	if ($registro['nombre_r_cortopun'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['nombre_r_cortopun']; ?></td>
			            <td class="unit"><?php echo $registro['r_cortopun_cantidad'].$registro['r_cortopun_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num17 = $registro['r_cortopun_cantidad'] ?>

	         	<?php }else{
	         		echo "";
	         		$num17 = 0;
	         	} ?>


	         	<!-- EPPS -->
	         	<?php 
	        	if ($registro['nombre_epps'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['nombre_epps']; ?></td>
			            <td class="unit"><?php echo $registro['epps_cantidad'].$registro['epps_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num18 = $registro['epps_cantidad'] ?>

	         	<?php }else{
	         		echo "";
	         		$num18 = 0;
	         	} ?>


	         	<!-- Otros1 -->
	         	<?php 
	        	if ($registro['otros1_nombre'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['otros1_nombre']; ?></td>
			            <td class="unit"><?php echo $registro['otros1_cantidad'].$registro['otros1_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num19 = $registro['otros1_cantidad'] ?>

	         	<?php }else{
	         		echo "";
	         		$num19 = 0;
	         	} ?>


	         	<!-- Otros2 -->
	         	<?php 
	        	if ($registro['otros2_nombre'] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $registro['otros2_nombre']; ?></td>
			            <td class="unit"><?php echo $registro['otros2_cantidad'].$registro['otros2_metrica']; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num20 = $registro['otros2_cantidad'] ?>

	         	<?php }else{
	         		echo "";
	         		$num20 = 0;
	         	} ?>

	        </tbody>
	        <tfoot>
	          <tr>
	            <td colspan="2"></td>
	            <td colspan="2">TOTAL</td>
	            <?php
	            $a = array($num1, $num2, $num3, $num4, $num5, $num6, $num7, $num8, $num9, $num10, $num11, $num12, $num13, $num14, $num15, $num16, $num17, $num18, $num19, $num20 );
	             ?>
	            <td><?php echo array_sum($a) ?></td>
	          </tr>
	        </tfoot>
	      </table>
	      </div>

			<!-- Observaciones -->
	      <?php 
	      	if ($registro['observaciones'] != NULL) { ?>
	      	<table class="obser">
	          <thead>
	            <tr>
	              <th class="desc n"><b>OBSERVACIONES:</b> <b class="negro"><?php echo $registro['observaciones']; ?></b></th>
	            </tr>
	          </thead>
            </table>
	      <?php }else{
	      		echo "";
	      	} ?>


	    <div class="peque">
	    <table style="margin: 0 auto !important;">
        <thead>
          <tr>
            <th class="desc n"><b>DESPACHADO POR:</b></th>
            <th class="desc n"><b>RECIBIDO POR:</b></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="desc"><?php 
                          $Base64Img = $registro['firma_despachador'];

                          list(, $Base64Img) = explode(';', $Base64Img);
                          list(, $Base64Img) = explode(',', $Base64Img);

                          $Base64Img = base64_decode($Base64Img);

                          file_put_contents('img/firmas-mani/unodepiera.png', $Base64Img);    
                          echo "<img style='width: 70px; height: 70px' src='img/firmas-mani/unodepiera.png' alt='unodepiera' />";

                         ?></td>
            <td class="unit"><?php 
                              $BasImg = $registro['firma_recibido'];

                              list(, $BasImg) = explode(';', $BasImg);
                              list(, $BasImg) = explode(',', $BasImg);

                              $BasImg = base64_decode($BasImg);

                              file_put_contents('img/firmas-mani/unodepiera2.png', $BasImg);    
                              echo "<img style='width: 70px; height: 70px' src='img/firmas-mani/unodepiera2.png' alt='unodepiera2' />";

                             ?></td>
          </tr>
        </tbody>
        </table>
	    </div>
	  

	      <div id="thanks"><hr></div>
	      <?php 
	        $query="SELECT * FROM empresas WHERE nit=".$_SESSION["empresas_nit"];
		    $resultado=mysqli_query($mysqli,$query);
		    $consulta2=mysqli_fetch_array($resultado);
	         ?>
	      <div id="notices">
	        <div class="contac">Contactenos:</div>
	        <div class="notice"><b>Dirección:</b> <?php echo $consulta2['direccion']; ?></div>
	        <div class="notice"><b>Correo Electrónico:</b> <a href="mailto:<?php echo $consulta2['correo']; ?>"><?php echo $consulta2['correo']; ?></a> </div>
	        <div class="notice"><b>Celular:</b> <?php echo $consulta2['telefono']; ?></div>
	      </div>

	    </main>
	    <footer>
	      Copyright &copy; ECOSOFT 2021
	    </footer>
	  </body>
	</html>


<?php 
	$html = ob_get_contents();
	ob_end_clean();

	$mpdf = new \Mpdf\Mpdf([

	]);




	$mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
	$mpdf->WriteHTML($html, 2);
	

	$mpdf->Output();
 ?>










