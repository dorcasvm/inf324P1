<?php
	$tipo = $_POST["tipo"];
	$ci=$_POST["ci"];
	$sigla=$_POST["sigla"];
	$nota1=$_POST["nota1"];
	$nota2=$_POST["nota2"];
	$nota3=$_POST["nota3"];
	$notaF=$_POST["notaF"];
	$conn = mysqli_connect("localhost", "root", "");
	mysqli_select_db($conn, "bd_DorcasVM");
	$notaF=$nota1 +$nota2+$nota3;
	if($_POST["tipo"]!="editar"){
		//SE INSERTA UN ALUMNO
		//echo"alumno insertado";
		$sql="insert into nota(ci, sigla, nota1, nota2, nota3, notaF)";
		$sql.="values('$ci', '$sigla', '$nota1', '$nota2', '$nota3', '$notaF');";

	}
	else{
		$sql="UPDATE nota SET nota1 = '$nota1', nota2 = '$nota2', nota3 = '$nota3', notaF = '$notaF' WHERE nota.ci = '$ci';";
	}
	echo $sql;
	mysqli_query($conn, $sql);
	header("location: vernotas.php");
?>