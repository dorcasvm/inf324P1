<?php include "inicial.inc.php"; ?>
<?php
	
	$tipo = $_GET["tipo"];
	if ($_GET["tipo"]=="editar") {
		$con = mysqli_connect("localhost", "root", "");
		$res=mysqli_select_db($con, "bd_DorcasVM");
		$sql="select * from nota where ci=".$_GET['ci'];
		$resultado=mysqli_query($con, $sql);
		$fila=mysqli_fetch_array($resultado);
		$ci=$fila["ci"];
		$sigla=$fila["sigla"];
		$nota1=$fila["nota1"];
		$nota2=$fila["nota2"];
		$nota3=$fila["nota3"];
		$notaF=$fila["notaF"];
	}else{
		$ci="";
		$sigla="";
		$nota1="";
		$nota2="";
		$nota3="";
		$notaF="";
	}
?>
	<H1 class="titulo"> A D I C I O N A R</H1>
	<form method="POST" action="editar_guardar.php">
		<table>
		<input type="hidden" name="tipo" value="<?php echo $tipo; ?>">
		<tr><td>CI: </td><td><input type="text" name="ci" value="<?php echo $ci;?>"/></td></tr><br/>
		<tr><td>Sigla</td><td><input type="text" name="sigla" value="<?php echo $sigla;?>"/></td></tr><br/>
		<tr><td>Nota 1</td><td><input type="text" name="nota1" value="<?php echo $nota1;?> "/></td></tr><br/>
		<tr><td>Nota 2</td><td><input type="text" name="nota2" value="<?php echo $nota2;?> "/></td></tr><br/>
		<tr><td>Nota 3</td><td><input type="text" name="nota3" value="<?php echo $nota3;?> "/></td></tr><br/>
		<tr><td>NOTA FINAL</td><td><input type="text" name="notaF" value="<?php echo $notaF;?>"/></td></tr><br/>
		<tr><td><input type="submit" name="aceptar" value="Aceptar"></td>
			<td><input type="submit" name="cancelar" value="Cancelar"></td></tr>
		</td>
		</table>
	</form>
<?php include "final.inc.php"; ?>