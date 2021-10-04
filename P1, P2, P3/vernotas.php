<?php include "inicial.inc.php";?>
<?php
//BACKEND PARTE ADMINISTRATIVA MUESTRA TODAS LAS NOTAS
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
$res = mysqli_query($con, "select * from nota where ci=$qci");
?>

<h1 class="titulo">ESTADO ACTUAL DE NOTAS</h1>
<h2 class="titulo2">Usuario: <?php echo"$qusuario";?> <br></h2>
<h2 class="titulo2">Nivel: <?php echo"$qdes";?> </h2>
<table border=1>
<tr><th>CI</th><th>SIGLA</th><th>NOTA 1</th><th>NOTA 2</th><th>NOTA 3</th><th>NOTA FINAL</th>
<?php
if($qnivel==100){
	?>
	<form action="editar.php" method="GET">
		<br>
		<CENTER>
			<input type="hidden" name="tipo" value="nuevo"/>
			<input type="submit" value="Adicionar"/>
		</CENTER>
	</form>
	<center><form action="promedio.php">
		<input type="submit" name="promedio" value="Promedio">
	</form></center> 
	<?php
	$res = mysqli_query($con, "select * from nota");
	echo"<th>MODIFICAR NOTA</th>";
}
echo"</tr>";
while (($fila=mysqli_fetch_row($res))!=null){
	echo "<tr>";
	echo "<td>".$fila[0] . "</td><td>". $fila[1] . "</td><td> " . $fila[2] ."</td><td>". $fila[3]. " </td><td>". $fila[4]. " </td><td>". $fila[5]. " </td>";
	//para mandar el ci php?ci=$fila[0]
	if($qnivel==100){
		echo "<td>";
		echo "<a href='editar.php?tipo=editar&ci=$fila[0]'> Editar </a>";
		echo "</td>"; 		
	}
	echo "</tr>";
}
echo "</table>";
		

mysqli_close($con);

?>
<br>
<form action="procesanotas.php"><input type="submit" name="volver" value="VOLVER"></form>
<FORM name="cerrarsesion" action="cerrarsesion.php">
	<input type="SUBMIT" name="cerrarsesion" value="CERRAR SESION">
</FORM>
<?php include "final.inc.php";?>