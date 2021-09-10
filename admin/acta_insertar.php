<?php 
	include("../gerente/conexion_bd.php");
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
	
	header("location:actas_tabla.php");
	
 ?>