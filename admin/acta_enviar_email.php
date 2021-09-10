<?php 

	include("../gerente/conexion_bd.php");
	require_once('../PHPMailer/config.php');

		$destinatario = htmlentities($_POST['destinatario']);
        $num = htmlentities($_POST['num']);
		$ciudad = htmlentities($_POST['ciudad']);
		$fecha = htmlentities($_POST['fecha']);
		$id_manifiesto = htmlentities($_POST['id_manifiesto']);
		$entidad = htmlentities($_POST['entidad']);
		$equipo = htmlentities($_POST['equipo']);
		$placa = htmlentities($_POST['placa']);
		$conductor = htmlentities($_POST['conductor']);
		$hora_re = htmlentities($_POST['hora_re']);

		$observaciones = htmlentities($_POST['observaciones']);

		$firma1 = htmlentities($_POST['firma1']);
		$firma2 = htmlentities($_POST['firma2']);
		$nit = htmlentities($_POST['nit']);
		$id_cliente = htmlentities($_POST['id_cliente']);



		if ($_POST["materialr"] != null or  $_POST["plasticoc"] != null or $_POST["lodosa"] != null or $_POST["cartonc"] != null or $_POST["vidrioc"] != null or $_POST["metales"] != null or $_POST["filtros"] != null or $_POST["aceites"] != null or $_POST["solventes"] != null or $_POST["rquimico"] != null or $_POST["fluores"] != null or $_POST["baterias"] != null or $_POST["pilas"] != null or $_POST["r_organico"] != null or $_POST["r_ordinario"] != null or $_POST["r_reciclable"] != null or $_POST["r_cortopun"] != null or $_POST["epps"] != null or $_POST["otros1"] != null or $_POST["otros2"] != null) {
		
			$a = $_POST["materialr"];
			$b = $_POST["plasticoc"];
			$c = $_POST["lodosa"];
			$d = $_POST["cartonc"];
			$e = $_POST["vidrioc"];
			$f = $_POST["metales"];
			$g = $_POST["filtros"];
			$h = $_POST["aceites"];
			$i = $_POST["solventes"];
			$j = $_POST["rquimico"];
			$k = $_POST["fluores"];
			$l = $_POST["baterias"];
			$m = $_POST["pilas"];
			$n = $_POST["r_organico"];
			$o = $_POST["r_ordinario"];
			$p = $_POST["r_reciclable"];
			$q = $_POST["r_cortopun"];
			$r = $_POST["epps"];
			$s = $_POST["otros1"];
			$t = $_POST["otros2"];

			mysqli_query($mysqli,"INSERT INTO actas VALUES('','$num','$ciudad','$fecha','$id_manifiesto','$entidad','$equipo','$placa','$conductor','$hora_re','$a[0]','$a[1]','$a[2]','$b[0]','$b[1]','$b[2]','$c[0]','$c[1]','$c[2]','$d[0]','$d[1]','$d[2]','$e[0]','$e[1]','$e[2]','$f[0]','$f[1]','$f[2]','$g[0]','$g[1]','$g[2]','$h[0]','$h[1]','$h[2]','$i[0]','$i[1]','$i[2]','$j[0]','$j[1]','$j[2]','$k[0]','$k[1]','$k[2]','$l[0]','$l[1]','$l[2]','$m[0]','$m[1]','$m[2]','$n[0]','$n[1]','$n[2]','$o[0]','$o[1]','$o[2]','$p[0]','$p[1]','$p[2]','$q[0]','$q[1]','$q[2]','$r[0]','$r[1]','$r[2]','$s[0]','$s[1]','$s[2]','$t[0]','$t[1]','$t[2]','$observaciones','$firma1','$firma2','$nit')");
		    
		}


	ob_start();
	session_start();

	if($_SESSION["usuario2"] == null){
	    header("Location: ../index.php");
	}

	require_once('../plugins/mpdf/vendor/autoload.php');

    //CSS de la plantilla
	$css = file_get_contents('plantilla_acta/style.css');
	
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
	        <h2 style="text-align: center; color: #217b1c"> MANIFIESTO DE RECOLECCIÓN DE RESIDUOS INDUSTRIALES NUMERO <b style="color: #AF2A0D"><?php echo $_POST['num']; ?></b> </h2>
	      </div>
	      <div id="company" style="margin-top: 16px">
	      	<table>
		      	<thead>
		      		<tr>
		      			<th class="nu n "><b>CIUDAD:</b> <b class="negro"><?php echo $_POST['ciudad']; ?></b></th>
		      			<th class="n "><b>FECHA: </b> <b class="negro"><?php echo $_POST['fecha']; ?></b></th>
		      			<th class="n "><b>ID: </b> <b class="negro">
		      			<?php 
		      				if ($_POST['id_manifiesto'] == 0) {
		      					echo "";
		      				}else{
		      					echo $_POST['id_manifiesto']; 
		      				}
		      			?>	
		      			</b></th>
		      		</tr>
		      		<tr>
		      			<th class="nu n "><b>ENTIDAD:</b> <b class="negro"><?php echo $_POST['entidad']; ?></b></th>
		      			<th class="nu n "><b>EQUIPO:</b> <b class="negro"><?php echo $_POST['equipo']; ?></b></th>
		      			<th class="n "><b>PLACA VEHICULO: </b> <b class="negro"><?php echo $_POST['placa']; ?></b></th>
		      		</tr>
		      		<tr>
		      			<th class="nu n "><b>CONDUCTOR OPERATIVO:</b> <b class="negro"><?php echo $_POST['conductor']; ?></b></th>
		      			<th class="n "><b>HORA RECOLECCIÓN: </b> <b class="negro"><?php echo $_POST['hora_re']; ?></b></th>
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
	        	if ($a[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $a[0] ?></td>
			            <td class="unit"><?php echo $a[1].$a[2]; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num1 = $a[1] ?>
	         	<?php }else{
	         		echo "";
	         		$num1 = 0;
	         	} ?>


	         	<!-- Plástico Contaminante -->
	         	<?php 
	        	if ($b[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $b[0] ?></td>
			            <td class="unit"><?php echo $b[1].$b[2]; ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num2 = $b[1] ?>
	         	<?php }else{
	         		echo "";
	         		$num2 = 0;
	         	} ?>


	         	<!-- Lodos Aceitosos -->
	         	<?php 
	        	if ($c[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $c[0] ?></td>
			            <td class="unit"><?php echo $c[1].$c[2] ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num3 = $c[1] ?>
	         	<?php }else{
	         		echo "";
	         		$num3 = 0;
	         	} ?>


	         	<!-- Cartón contaminado -->
	         	<?php 
	        	if ($d[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $d[0] ?></td>
			            <td class="unit"><?php echo $d[1].$d[2] ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num4 = $d[1] ?>
	         	<?php }else{
	         		echo "";
	         		$num4 = 0;
	         	} ?>

	         	<!-- Vidrio contaminado -->
	         	<?php 
	        	if ($e[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $e[0] ?></td>
			            <td class="unit"><?php echo $e[1].$e[2] ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num5 = $e[1] ?>
	         	<?php }else{
	         		echo "";
	         		$num5 = 0;
	         	} ?>


	         	<!-- Metales -->
	         	<?php 
	        	if ($f[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $f[0] ?></td>
			            <td class="unit"><?php echo $f[1].$f[2] ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num6 = $f[1] ?>
	         	<?php }else{
	         		echo "";
	         		$num6 = 0;
	         	} ?>


	         	<!-- Filtros -->
	         	<?php 
	        	if ($g[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $g[0] ?></td>
			            <td class="unit"><?php echo $g[1].$g[2] ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num7 = $g[1] ?>
	         	<?php }else{
	         		echo "";
	         		$num7 = 0;
	         	} ?>


	         	<!-- Aceites Industriales -->
	         	<?php 
	        	if ($h[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $h[0] ?></td>
			            <td class="unit"><?php echo $h[1].$h[2] ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num8 = $h[1] ?>
	         	<?php }else{
	         		echo "";
	         		$num8 = 0;
	         	} ?>


	         	<!-- Solventes -->
	         	<?php 
	        	if ($i[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $i[0] ?></td>
			            <td class="unit"><?php echo $i[1].$i[2] ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num9 = $i[1] ?>
	         	<?php }else{
	         		echo "";
	         		$num9 = 0;
	         	} ?>


	         	<!-- Residuo Químico -->
	         	<?php 
	        	if ($j[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $j[0] ?></td>
			            <td class="unit"><?php echo $j[1].$j[2] ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num10 = $j[1] ?>
	         	<?php }else{
	         		echo "";
	         		$num10 = 0;
	         	} ?>


	         	<!-- Fluorescentes -->
	         	<?php 
	        	if ($k[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $k[0] ?></td>
			            <td class="unit"><?php echo $k[1].$k[2] ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num11 = $k[1] ?>
	         	<?php }else{
	         		echo "";
	         		$num11 = 0;
	         	} ?>


	         	<!-- Baterías -->
	         	<?php 
	        	if ($l[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $l[0] ?></td>
			            <td class="unit"><?php echo $l[1].$l[2] ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num12 = $l[1] ?>
	         	<?php }else{
	         		echo "";
	         		$num12 = 0;
	         	} ?>


	         	<!-- Pilas -->
	         	<?php 
	        	if ($m[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $m[0] ?></td>
			            <td class="unit"><?php echo $m[1].$m[2] ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num13 = $m[1] ?>
	         	<?php }else{
	         		echo "";
	         		$num13 = 0;
	         	} ?>


	         	<!-- Residuos Orgánicos -->
	         	<?php 
	        	if ($n[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $n[0] ?></td>
			            <td class="unit"><?php echo $n[1].$n[2] ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num14 = $n[1] ?>
	         	<?php }else{
	         		echo "";
	         		$num14 = 0;
	         	} ?>


	         	<!-- Residuos Ordinarios -->
	         	<?php 
	        	if ($o[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $o[0] ?></td>
			            <td class="unit"><?php echo $o[1].$o[2] ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num15 = $o[1] ?>
	         	<?php }else{
	         		echo "";
	         		$num15 = 0;
	         	} ?>


	         	<!-- Residuos Reciclables -->
	         	<?php 
	        	if ($p[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $p[0] ?></td>
			            <td class="unit"><?php echo $p[1].$p[2] ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num16 = $p[1] ?>
	         	<?php }else{
	         		echo "";
	         		$num16 = 0;
	         	} ?>


	         	<!-- Residuos Cortopunzantes -->
	         	<?php 
	        	if ($q[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $q[0] ?></td>
			            <td class="unit"><?php echo $q[1].$q[2] ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num17 = $q[1] ?>

	         	<?php }else{
	         		echo "";
	         		$num17 = 0;
	         	} ?>


	         	<!-- EPPS -->
	         	<?php 
	        	if ($r[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $r[0] ?></td>
			            <td class="unit"><?php echo $r[1].$r[2] ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num18 = $r[1] ?>

	         	<?php }else{
	         		echo "";
	         		$num18 = 0;
	         	} ?>


	         	<!-- Otros1 -->
	         	<?php 
	        	if ($s[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $s[0] ?></td>
			            <td class="unit"><?php echo $s[1].$s[2] ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num19 = $s[1] ?>

	         	<?php }else{
	         		echo "";
	         		$num19 = 0;
	         	} ?>


	         	<!-- Otros2 -->
	         	<?php 
	        	if ($t[0] != NULL) { ?>
	        		<tr>
			            <td class="desc"><?php echo $t[0] ?></td>
			            <td class="unit"><?php echo $t[1].$t[2] ?></td>
			         </tr>
			         <!-- tomando cantidades para el total -->
			         <?php $num20 = $t[1] ?>

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
	      	if ($_POST['observaciones'] != NULL) { ?>
	      	<table class="obser">
	          <thead>
	            <tr>
	              <th class="desc n"><b>OBSERVACIONES:</b> <b class="negro"><?php echo $_POST['observaciones']; ?></b></th>
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
                          $Base64Img = $_POST['firma1'];

                          list(, $Base64Img) = explode(';', $Base64Img);
                          list(, $Base64Img) = explode(',', $Base64Img);

                          $Base64Img = base64_decode($Base64Img);

                          file_put_contents('img/firmas-mani/unodepiera.png', $Base64Img);    
                          echo "<img style='width: 70px; height: 70px' src='img/firmas-mani/unodepiera.png' alt='unodepiera' />";

                         ?></td>
            <td class="unit"><?php 
                              $BasImg = $_POST['firma2'];

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
        
        
        $query="SELECT correo_gen FROM clientes WHERE id_clientes=".$_POST['id_cliente'];
		$resultado=mysqli_query($mysqli,$query);
		$consulta3=mysqli_fetch_array($resultado);



        //--------- Fecha y nombre de la empresa ----------//
        $originalDate = $fecha;
        $newDate = date("d/m/Y", strtotime($originalDate));
        
        $nombre = $consulta2['nombre'];
        $corr_email = $consulta2['correo'];
       

    	$html = ob_get_contents();
    	ob_end_clean();
    
    	$mpdf = new \Mpdf\Mpdf([
    
    	]);
    
    
    
    	$mpdf->writeHtml($css, \Mpdf\HTMLParserMode::HEADER_CSS);
    	$mpdf->WriteHTML($html, 2);
    	
    	
        //--------------- Prueba con PHPMailer -------------------//
        
        try{
            
            $mail->ClearAllRecipients( );

            $mail->AddAddress($consulta3['correo_gen']);
            $mail->AddCC($consulta2['correo']);
            
            $mail->IsHTML(true);  //podemos activar o desactivar HTML en mensaje
            $mail->Subject = 'Manifiesto de Recolección de residuos '.$nombre;
            
            $msg = "<head>  
                      <style>       
                        body { 
                            height: 100%; width: 100%; max-width: 100%;
                            font-family: 'Tahoma', arial;  
                            background-color: #D8D8D8;
                            overflow: hidden;
                        }   
                    
                        .wit {
                            display: block; position:relative;
                            width: 100%; max-width:80%;                             
                            background-color: #FFF;         
                            left:10%;
                        }
                    
                        .blue { color: #178195; }
                        .bold { font-weight: bold; }
                        .grey { color: #585858; }
                        .padding32 { padding: 32px; }
                      </style>
                    </head>
                    
                    <body>
                        <div class=wit>
                        <div class=padding32>
                            <h4 class='inline m-L'><b>Cordial saludo</b></h4>
                            <br />
                    
                            <span class='bold'> $entidad </span> Adjuntamos Manifiesto de recolección de residuos realizado el <span class='bold'>$newDate</span><br />
                            <br />
                            Quedamos atentos a cualquier duda e inquietud al correo $corr_email<br />
                            <br />
                    
                            <h4 class=bold>Cordialmente</h4>
                            <span class=black>Departamento de tecnología</span><br />
                            $nombre<br />
                            ECOSOFT<br />
                        </div>
                        </div>  
                    </body>
                ";  
            
        
    		$pdfdoc = $mpdf->Output('', 'S');
    		$mail->addStringAttachment($pdfdoc, 'Manifiesto N° '.$num.'.pdf');
    	
            $mail->Body    = $msg;
            $mail->Send();
        
            echo "<script>
                alert('Email enviado Correctamente');
                window.location= 'actas_tabla.php'
    			</script>";
            
        }catch (Exception $e){
            
            echo "<script>
                alert('Hubo el error al enviar el mensaje: '), $mail->ErrorInfo;
                window.location= 'actas_tabla.php'
    			</script>";
        }
        

        
        //-------------- Fin Prueba con PHPMailer ---------------//
    
 ?>


