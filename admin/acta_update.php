
<?php
	include '../gerente/conexion_bd.php';



	if ($_POST["firma1"] != NULL AND $_POST["firma2"] == NULL) {

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

			$query = "UPDATE actas SET
			num_manifiesto='".$_POST['num_manifiesto']."', 
			ciudad='".$_POST['ciudad']."',
			fecha='".$_POST['fecha']."',
			id_manifiesto='".$_POST['id_manifiesto']."',
			entidad='".$_POST['entidad']."',
			equipo='".$_POST['equipo']."',
			placa_vehiculo='".$_POST['placa']."',
			conductor_operativo='".$_POST['conductor']."',
			hora_recoleccion='".$_POST['hora_re']."',
			nombre_material='".$a[0]."',
			material_cantidad='".$a[1]."',
			material_metrica='".$a[2]."',
			nombre_plastico='".$b[0]."',
			plastico_cantidad='".$b[1]."',
			plastico_metrica='".$b[2]."',
			nombre_lodos='".$c[0]."',
			lodos_cantidad='".$c[1]."',
			lodos_metrica='".$c[2]."',
			nombre_carton='".$d[0]."',
			carton_cantidad='".$d[1]."', 
			carton_metrica='".$d[2]."',
			nombre_vidrio='".$e[0]."',
			vidrio_cantidad='".$e[1]."',
			vidrio_metrica='".$e[2]."',
			nombre_metales='".$f[0]."',
			metales_cantidad='".$f[1]."',
			metales_metrica ='".$f[2]."',
			nombre_filtros ='".$g[0]."',
			filtros_cantidad ='".$g[1]."',
			filtros_metrica ='".$g[2]."',
			nombre_aceites ='".$h[0]."',
			aceites_cantidad ='".$h[1]."',
			aceites_metrica ='".$h[2]."',
			nombre_solventes ='".$i[0]."',
			solventes_cantidad ='".$i[1]."',
			solventes_metrica ='".$i[2]."',
			nombre_residuo ='".$j[0]."',
			residuo_cantidad ='".$j[1]."',
			residuo_metrica ='".$j[2]."',
			nombre_fluorescente ='".$k[0]."',
			fluorescente_cantidad ='".$k[1]."',
			fluorescente_metrica ='".$k[2]."',
			nombre_bateria ='".$l[0]."',
			bateria_cantidad ='".$l[1]."',
			bateria_metrica ='".$l[2]."',
			nombre_pila ='".$m[0]."',
			pila_cantidad ='".$m[1]."',
			pila_metrica ='".$m[2]."',
			nombre_r_organico ='".$n[0]."',
			r_organico_cantidad ='".$n[1]."',
			r_organico_metrica ='".$n[2]."',
			nombre_r_ordinario ='".$o[0]."',
			r_ordinario_cantidad ='".$o[1]."',
			r_ordinario_metrica ='".$o[2]."',
			nombre_r_reciclable ='".$p[0]."',
			r_reciclable_cantidad ='".$p[1]."',
			r_reciclable_metrica ='".$p[2]."',
			nombre_r_cortopun ='".$q[0]."',
			r_cortopun_cantidad ='".$q[1]."',
			r_cortopun_metrica ='".$q[2]."',
			nombre_epps ='".$r[0]."',
			epps_cantidad ='".$r[1]."',
			epps_metrica ='".$r[2]."',
			otros1_nombre ='".$s[0]."',
			otros1_cantidad ='".$s[1]."',
			otros1_metrica ='".$s[2]."',
			otros2_nombre ='".$t[0]."',
			otros2_cantidad ='".$t[1]."',
			otros2_metrica ='".$t[2]."',
			observaciones ='".$_POST['observaciones']."',
			firma_despachador ='".$_POST['firma1']."',
			nit ='".$_POST['nit']."'
			WHERE id =".$_POST['id'];
			mysqli_query($mysqli,$query);
		    header("location:actas_tabla.php");
			mysqli_close($mysqli);
		}
		
	}else if ($_POST["firma1"] == NULL AND $_POST["firma2"] != NULL){

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

			$query = "UPDATE actas SET
			num_manifiesto='".$_POST['num_manifiesto']."', 
			ciudad='".$_POST['ciudad']."',
			fecha='".$_POST['fecha']."',
			id_manifiesto='".$_POST['id_manifiesto']."',
			entidad='".$_POST['entidad']."',
			equipo='".$_POST['equipo']."',
			placa_vehiculo='".$_POST['placa']."',
			conductor_operativo='".$_POST['conductor']."',
			hora_recoleccion='".$_POST['hora_re']."',
			nombre_material='".$a[0]."',
			material_cantidad='".$a[1]."',
			material_metrica='".$a[2]."',
			nombre_plastico='".$b[0]."',
			plastico_cantidad='".$b[1]."',
			plastico_metrica='".$b[2]."',
			nombre_lodos='".$c[0]."',
			lodos_cantidad='".$c[1]."',
			lodos_metrica='".$c[2]."',
			nombre_carton='".$d[0]."',
			carton_cantidad='".$d[1]."', 
			carton_metrica='".$d[2]."',
			nombre_vidrio='".$e[0]."',
			vidrio_cantidad='".$e[1]."',
			vidrio_metrica='".$e[2]."',
			nombre_metales='".$f[0]."',
			metales_cantidad='".$f[1]."',
			metales_metrica ='".$f[2]."',
			nombre_filtros ='".$g[0]."',
			filtros_cantidad ='".$g[1]."',
			filtros_metrica ='".$g[2]."',
			nombre_aceites ='".$h[0]."',
			aceites_cantidad ='".$h[1]."',
			aceites_metrica ='".$h[2]."',
			nombre_solventes ='".$i[0]."',
			solventes_cantidad ='".$i[1]."',
			solventes_metrica ='".$i[2]."',
			nombre_residuo ='".$j[0]."',
			residuo_cantidad ='".$j[1]."',
			residuo_metrica ='".$j[2]."',
			nombre_fluorescente ='".$k[0]."',
			fluorescente_cantidad ='".$k[1]."',
			fluorescente_metrica ='".$k[2]."',
			nombre_bateria ='".$l[0]."',
			bateria_cantidad ='".$l[1]."',
			bateria_metrica ='".$l[2]."',
			nombre_pila ='".$m[0]."',
			pila_cantidad ='".$m[1]."',
			pila_metrica ='".$m[2]."',
			nombre_r_organico ='".$n[0]."',
			r_organico_cantidad ='".$n[1]."',
			r_organico_metrica ='".$n[2]."',
			nombre_r_ordinario ='".$o[0]."',
			r_ordinario_cantidad ='".$o[1]."',
			r_ordinario_metrica ='".$o[2]."',
			nombre_r_reciclable ='".$p[0]."',
			r_reciclable_cantidad ='".$p[1]."',
			r_reciclable_metrica ='".$p[2]."',
			nombre_r_cortopun ='".$q[0]."',
			r_cortopun_cantidad ='".$q[1]."',
			r_cortopun_metrica ='".$q[2]."',
			nombre_epps ='".$r[0]."',
			epps_cantidad ='".$r[1]."',
			epps_metrica ='".$r[2]."',
			otros1_nombre ='".$s[0]."',
			otros1_cantidad ='".$s[1]."',
			otros1_metrica ='".$s[2]."',
			otros2_nombre ='".$t[0]."',
			otros2_cantidad ='".$t[1]."',
			otros2_metrica ='".$t[2]."',
			observaciones ='".$_POST['observaciones']."',
			firma_recibido ='".$_POST['firma2']."',
			nit ='".$_POST['nit']."'
			WHERE id =".$_POST['id'];
			mysqli_query($mysqli,$query);
		    header("location:actas_tabla.php");
			mysqli_close($mysqli);
		}

	}else if ($_POST["firma1"] != NULL AND $_POST["firma2"] != NULL) {
		
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

			$query = "UPDATE actas SET
			num_manifiesto='".$_POST['num_manifiesto']."', 
			ciudad='".$_POST['ciudad']."',
			fecha='".$_POST['fecha']."',
			id_manifiesto='".$_POST['id_manifiesto']."',
			entidad='".$_POST['entidad']."',
			equipo='".$_POST['equipo']."',
			placa_vehiculo='".$_POST['placa']."',
			conductor_operativo='".$_POST['conductor']."',
			hora_recoleccion='".$_POST['hora_re']."',
			nombre_material='".$a[0]."',
			material_cantidad='".$a[1]."',
			material_metrica='".$a[2]."',
			nombre_plastico='".$b[0]."',
			plastico_cantidad='".$b[1]."',
			plastico_metrica='".$b[2]."',
			nombre_lodos='".$c[0]."',
			lodos_cantidad='".$c[1]."',
			lodos_metrica='".$c[2]."',
			nombre_carton='".$d[0]."',
			carton_cantidad='".$d[1]."', 
			carton_metrica='".$d[2]."',
			nombre_vidrio='".$e[0]."',
			vidrio_cantidad='".$e[1]."',
			vidrio_metrica='".$e[2]."',
			nombre_metales='".$f[0]."',
			metales_cantidad='".$f[1]."',
			metales_metrica ='".$f[2]."',
			nombre_filtros ='".$g[0]."',
			filtros_cantidad ='".$g[1]."',
			filtros_metrica ='".$g[2]."',
			nombre_aceites ='".$h[0]."',
			aceites_cantidad ='".$h[1]."',
			aceites_metrica ='".$h[2]."',
			nombre_solventes ='".$i[0]."',
			solventes_cantidad ='".$i[1]."',
			solventes_metrica ='".$i[2]."',
			nombre_residuo ='".$j[0]."',
			residuo_cantidad ='".$j[1]."',
			residuo_metrica ='".$j[2]."',
			nombre_fluorescente ='".$k[0]."',
			fluorescente_cantidad ='".$k[1]."',
			fluorescente_metrica ='".$k[2]."',
			nombre_bateria ='".$l[0]."',
			bateria_cantidad ='".$l[1]."',
			bateria_metrica ='".$l[2]."',
			nombre_pila ='".$m[0]."',
			pila_cantidad ='".$m[1]."',
			pila_metrica ='".$m[2]."',
			nombre_r_organico ='".$n[0]."',
			r_organico_cantidad ='".$n[1]."',
			r_organico_metrica ='".$n[2]."',
			nombre_r_ordinario ='".$o[0]."',
			r_ordinario_cantidad ='".$o[1]."',
			r_ordinario_metrica ='".$o[2]."',
			nombre_r_reciclable ='".$p[0]."',
			r_reciclable_cantidad ='".$p[1]."',
			r_reciclable_metrica ='".$p[2]."',
			nombre_r_cortopun ='".$q[0]."',
			r_cortopun_cantidad ='".$q[1]."',
			r_cortopun_metrica ='".$q[2]."',
			nombre_epps ='".$r[0]."',
			epps_cantidad ='".$r[1]."',
			epps_metrica ='".$r[2]."',
			otros1_nombre ='".$s[0]."',
			otros1_cantidad ='".$s[1]."',
			otros1_metrica ='".$s[2]."',
			otros2_nombre ='".$t[0]."',
			otros2_cantidad ='".$t[1]."',
			otros2_metrica ='".$t[2]."',
			observaciones ='".$_POST['observaciones']."',
			firma_despachador ='".$_POST['firma1']."',
			firma_recibido ='".$_POST['firma2']."',
			nit ='".$_POST['nit']."'
			WHERE id =".$_POST['id'];
			mysqli_query($mysqli,$query);
		    header("location:actas_tabla.php");
			mysqli_close($mysqli);
		}
	}else{

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

			$query = "UPDATE actas SET
			num_manifiesto='".$_POST['num_manifiesto']."', 
			ciudad='".$_POST['ciudad']."',
			fecha='".$_POST['fecha']."',
			id_manifiesto='".$_POST['id_manifiesto']."',
			entidad='".$_POST['entidad']."',
			equipo='".$_POST['equipo']."',
			placa_vehiculo='".$_POST['placa']."',
			conductor_operativo='".$_POST['conductor']."',
			hora_recoleccion='".$_POST['hora_re']."',
			nombre_material='".$a[0]."',
			material_cantidad='".$a[1]."',
			material_metrica='".$a[2]."',
			nombre_plastico='".$b[0]."',
			plastico_cantidad='".$b[1]."',
			plastico_metrica='".$b[2]."',
			nombre_lodos='".$c[0]."',
			lodos_cantidad='".$c[1]."',
			lodos_metrica='".$c[2]."',
			nombre_carton='".$d[0]."',
			carton_cantidad='".$d[1]."', 
			carton_metrica='".$d[2]."',
			nombre_vidrio='".$e[0]."',
			vidrio_cantidad='".$e[1]."',
			vidrio_metrica='".$e[2]."',
			nombre_metales='".$f[0]."',
			metales_cantidad='".$f[1]."',
			metales_metrica ='".$f[2]."',
			nombre_filtros ='".$g[0]."',
			filtros_cantidad ='".$g[1]."',
			filtros_metrica ='".$g[2]."',
			nombre_aceites ='".$h[0]."',
			aceites_cantidad ='".$h[1]."',
			aceites_metrica ='".$h[2]."',
			nombre_solventes ='".$i[0]."',
			solventes_cantidad ='".$i[1]."',
			solventes_metrica ='".$i[2]."',
			nombre_residuo ='".$j[0]."',
			residuo_cantidad ='".$j[1]."',
			residuo_metrica ='".$j[2]."',
			nombre_fluorescente ='".$k[0]."',
			fluorescente_cantidad ='".$k[1]."',
			fluorescente_metrica ='".$k[2]."',
			nombre_bateria ='".$l[0]."',
			bateria_cantidad ='".$l[1]."',
			bateria_metrica ='".$l[2]."',
			nombre_pila ='".$m[0]."',
			pila_cantidad ='".$m[1]."',
			pila_metrica ='".$m[2]."',
			nombre_r_organico ='".$n[0]."',
			r_organico_cantidad ='".$n[1]."',
			r_organico_metrica ='".$n[2]."',
			nombre_r_ordinario ='".$o[0]."',
			r_ordinario_cantidad ='".$o[1]."',
			r_ordinario_metrica ='".$o[2]."',
			nombre_r_reciclable ='".$p[0]."',
			r_reciclable_cantidad ='".$p[1]."',
			r_reciclable_metrica ='".$p[2]."',
			nombre_r_cortopun ='".$q[0]."',
			r_cortopun_cantidad ='".$q[1]."',
			r_cortopun_metrica ='".$q[2]."',
			nombre_epps ='".$r[0]."',
			epps_cantidad ='".$r[1]."',
			epps_metrica ='".$r[2]."',
			otros1_nombre ='".$s[0]."',
			otros1_cantidad ='".$s[1]."',
			otros1_metrica ='".$s[2]."',
			otros2_nombre ='".$t[0]."',
			otros2_cantidad ='".$t[1]."',
			otros2_metrica ='".$t[2]."',
			observaciones ='".$_POST['observaciones']."',
			nit ='".$_POST['nit']."'
			WHERE id =".$_POST['id'];
			mysqli_query($mysqli,$query);
		    header("location:actas_tabla.php");
			mysqli_close($mysqli);
		}

	}





    

	

?>