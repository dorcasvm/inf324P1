<?php include "inicial.inc.php";?>
			<CENTER><H1 class="titulo">L  O   G  I  N</H1>
			<h2 class="titulo2">Bienvenido al Sistema De Ciencias Puras y Naturales</h2> <br/></CENTER>
			<form name="Ingresar" action="validar.php" method="POST">
			<center>
				<table>
					<tr><td>Login:</td><td><input type="text" name="login"></td></tr> <br>
					<tr><td>Password: </td><td><input type="password" name="clave"></td></tr><br>
					<tr><td colspan="2"><center><input type="SUBMIT" name="INGRESAR" value="Ingresar"></center></td></tr>
				</table>
			</form>	<br/>
			<form name="Registrar" action="registro.php">
				<input type="SUBMIT" value="Registrarme">
			</form>
			</table>
			</center>
<?php include "final.inc.php";?>
		