<?php

require_once('../PHPMailer/config.php');
require '../gerente/conexion_bd.php';


$nombre3 = htmlentities($_POST['nombre']);
$identificacion = htmlentities($_POST['identificacion']);
$cargo = htmlentities($_POST['cargo']);
$rol = htmlentities($_POST['rol']);
$estado = htmlentities($_POST['estado']);
$modulo = htmlentities($_POST['modulo']);
$propio = htmlentities($_POST['propio']);
$telefono = htmlentities($_POST['telefono']);
$celular = htmlentities($_POST['celular']);
$correo = htmlentities($_POST['correo']);
$direccion = htmlentities($_POST['direccion']);
$pais = htmlentities($_POST['pais']);
$ciudad = htmlentities($_POST['ciudad']);
$usuario = htmlentities($_POST['usuario']);
$contrasena = htmlentities($_POST['contrasena']);
$pass = md5($contrasena);
$licencia = htmlentities($_POST['licencia']);
$fechlicencia = htmlentities($_POST['fechlicencia']);
$usuarios_id = htmlentities($_POST['usuarios_id']);
$nit = htmlentities($_POST['nit']);


//la variable  $mysqli viene de conexion_bd que lo traigo con el require("conexion_bd.php");

	//----------------------Si NO hay Firma y Parafiscales------------------------------------
	if ($_FILES['firma']['name']== null && $_FILES['parafiscales']['name']== null) {
	        mysqli_query($mysqli,"INSERT INTO usuarios VALUES ('','$usuario','$correo','$pass','$rol','$nombre3','$identificacion','$cargo','$estado','$modulo','$propio','$telefono','$celular','$pais','$ciudad','$direccion','$licencia','$fechlicencia','','','','','$nit',$usuarios_id)");
	    }




	//-------------------Si HAY Archivo adjunto de FIRMA y NO hay Parafiscales------------------------------------
    elseif ($_FILES['firma']['name']!= null && $_FILES['parafiscales']['name']== null) {

        $ruta = "img/uploads-usr/";
        $destino = $ruta.$_FILES['firma']['name'];
        copy($_FILES['firma']['tmp_name'],$destino);
        $nombre=$_FILES['firma']['name'];
        mysqli_query($mysqli,"INSERT INTO usuarios VALUES ('','$usuario','$correo','$pass','$rol','$nombre3','$identificacion','$cargo','$estado','$modulo','$propio','$telefono','$celular','$pais','$ciudad','$direccion','$licencia','$fechlicencia','$nombre','$destino','','','$nit',$usuarios_id)");

    }


    //-------------------Si NO hay Archivo adjunto de FIRMA y SI hay Parafiscales------------------------------------
    elseif ($_FILES['firma']['name']== null && $_FILES['parafiscales']['name']!= null) {

        $ruta = "img/uploads-usr/";
        $destino = $ruta.$_FILES['parafiscales']['name'];
        copy($_FILES['parafiscales']['tmp_name'],$destino);
        $nombre=$_FILES['parafiscales']['name'];
        mysqli_query($mysqli,"INSERT INTO usuarios VALUES ('','$usuario','$correo','$pass','$rol','$nombre3','$identificacion','$cargo','$estado','$modulo','$propio','$telefono','$celular','$pais','$ciudad','$direccion','$licencia','$fechlicencia','','','$nombre','$destino','$nit',$usuarios_id)");
     
    }



    //-------------------SI HAY Archivo adjunto de FIRMA y SI HAY Parafiscales------------------------------------
    elseif ($_FILES['firma']['name']!= null && $_FILES['parafiscales']['name']!= null) {

        $ruta = "img/uploads-usr/";
        $destino = $ruta.$_FILES['firma']['name'];
        $destino2 = $ruta.$_FILES['parafiscales']['name'];

        copy($_FILES['firma']['tmp_name'],$destino);
        copy($_FILES['parafiscales']['tmp_name'],$destino2);

        $nombre=$_FILES['firma']['name'];
        $nombre2=$_FILES['parafiscales']['name'];

        mysqli_query($mysqli,"INSERT INTO usuarios VALUES ('','$usuario','$correo','$pass','$rol','$nombre3','$identificacion','$cargo','$estado','$modulo','$propio','$telefono','$celular','$pais','$ciudad','$direccion','$licencia','$fechlicencia','$nombre','$destino','$nombre2','$destino2','$nit',$usuarios_id)");
    	
    }




    //--------------------------------ENVIANDO CORREO ELECTRÓNICO ------------------------------------

        $query="SELECT * FROM empresas WHERE nit=".$_SESSION["empresas_nit"];
        $resultado=mysqli_query($mysqli,$query);
        $consulta2=mysqli_fetch_array($resultado);
      
        $nombre_empresa = $consulta2['nombre'];

        if ($_POST['gridRadios'] == 'option1'){

             try{
            
            $mail->ClearAllRecipients( );

            $mail->AddAddress("$correo");
            
            $mail->IsHTML(true);  //podemos activar o desactivar HTML en mensaje
            $mail->Subject = 'Acceso al Sistema '.$nombre_empresa." - ECOSOFT";
            
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
                            <h4 class='inline m-L'><b>Bienvenid@ $nombre3</b></h4>
                            <br />
                    
                            <span> Sus credenciales de Accesos a nuestro sistemas son: </span><br />
                            <br />
                            Su clave de ingreso es: <span class='bold'>$contrasena</span><br />
                            Su Usuario de ingreso es: <span class='bold'>$usuario</span><br />
                            <br />
                    
                            <h4 class=bold>Cordialmente</h4>
                            <span class=black>Departamento de tecnología</span><br />
                            $nombre<br />
                            ECOSOFT<br />
                        </div>
                        </div>  
                    </body>
                ";  
                    
            $mail->Body    = $msg;
            $mail->Send();
            
        }catch (Exception $e){
            
            echo "<script>
                alert('Hubo el error al enviar el mensaje: '), $mail->ErrorInfo;
                window.location= 'usuarios.php'
                </script>";
        }

    }







?>
