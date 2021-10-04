<?php include "inicial.inc.php";?>
<?php
session_start(); //habilita la sesion

session_unset(); //para quitar los valores de todas las variables

session_destroy(); //destruye todas la variables

echo"SESIÓN FINALIZADA";

?>
<hr>
<br>
<form action="index.php"><input type="submit" name="boton" value="INICIAR SESION"> </form>
<?php include "final.inc.php";?>