<?php
session_start();

$Login = $_REQUEST["login"];
$clave = $_REQUEST["clave"];

echo "validando a $Login y clave $clave";

$con=mysqli_connect("localhost", "root", "");

mysqli_select_db($con, "bd_DorcasVM");

$res = mysqli_query($con, "select * from usuarios where usuario='$Login' and sha1('$clave')");
if(mysqli_num_rows($res)==1){
	echo "ENCONTRADO";
	$registro = mysqli_fetch_row($res);
	$_SESSION["usuario"]=$Login;
	$_SESSION["nivel"]=$registro[4];
	$_SESSION["des"]=$registro[3];
	$_SESSION["ci"]=$registro[0];
	header("location: procesanotas.php");
}
else{
	header("location: index.php");
	echo "NO ENCONTRADO";
}

?>