<?php include "inicial.inc.php";?>
<?php
	$ci = $_REQUEST["carnet"];
	$nom = $_REQUEST["nombres"];
	$dia = $_REQUEST["d"];
	$mes = $_REQUEST["m"];
	$año = $_REQUEST["a"];
	$dpto = $_REQUEST["dpto"];
	
	//Abre la base de datos
	$con = mysqli_connect("localhost", "root", "");
	// verifica si se conecto la base de datos correctamente:
	if($con -> connect_errno){
		echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
		exit();
	}
	$fechaN = $año."-".$mes."-".$dia;
	//De eso que he abierto en mysql, selecciona la base de datos
	mysqli_select_db($con, "bd_DorcasVM");
	$sql="insert into persona (ci,nombres,fechanac,dpto)
	values ('$ci', '$nom', '$fechaN','$dpto')";
	//echo "*$sql*";
	mysqli_query($con, $sql); //graba en la base de datos lo que esta en el comando sql
	mysqli_close($con);
	echo "<script>
                alert('UD. FUE REGISTRADO');
                window.location= 'registro.php'
    </script>";
	//echo '<script language="javascript">alert("UD FUE REGISTRADO");</script>';
	//header("location: registro.php");
	//echo "TODO OK";
?>
<?php include "final.inc.php";?>

