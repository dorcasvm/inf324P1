<?php include "inicial.inc.php";?>
<?php
//BACKEND PARTE ADMINISTRATIVA MUESTRA INFORMACION DEL USUARIO
session_start();
if(!$_SESSION["usuario"]){
	header("location: index.php");
}
else{
	$qusuario = $_SESSION["usuario"];
	$qnivel = $_SESSION["nivel"];
	$qdes =$_SESSION["des"];
	$qci=$_SESSION["ci"];
}
$con=mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "bd_DorcasVM");
$res = mysqli_query($con, "select * from persona where ci='$qci' ");
?>
	<h1 class="titulo">DATOS DEL USUARIO</h1>
	<h2 class="titulo2">Usuario: <?php echo"$qusuario";?> <br></h2>
	<h2 class="titulo2">Nivel: <?php echo"$qdes";?> </h2>
	<table border=1>
	<tr><th>CI</th><th>NOMBRES</th><th>FECHA_NAC</th><th>DPTO</th>
</tr>
<?php
while (($fila=mysqli_fetch_row($res))!=null){ ?>
	<tr><td><?php echo"$fila[0]"; ?></td><td> <?php echo "$fila[1]"; ?></td><td><?php echo"$fila[2]";?></td><td><?php echo"$fila[3]";?></td>
</tr>
	</table>
<?php
 }
mysqli_close($con);

?>
<br>
<form name="vernotas" action="vernotas.php">
<input type="SUBMIT" name="vernotas" value="VER NOTAS">
</form>
<FORM name="cerrarsesion" action="cerrarsesion.php">
	<input type="SUBMIT" name="cerrarsesion" value="CERRAR SESION">
</FORM>
<?php include "final.inc.php";?>