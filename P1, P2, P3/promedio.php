<?php include "inicial.inc.php";?>
<center><form action="vernotas.php"><input type="submit" name="volver" value="VOLVER"></form></center>
<?php
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
	$ch=0; $pch=0;
	$lp=0; $plp=0;
	$cba=0; $pcba=0;
	$oru=0; $poru=0;
	$pt=0; $ppt=0;
	$tj=0; $ptj=0;
	$scz=0; $pscz=0;
	$bn=0; $pbn=0;
	$pd=0; $ppd=0;
	$con=mysqli_connect("localhost", "root", "");
	mysqli_select_db($con, "bd_DorcasVM");
	$res = mysqli_query($con, "select * from nota");
	while (($fila=mysqli_fetch_row($res))!=null){ 
		$res2 = mysqli_query($con, "select * from persona");
		while (($fila2=mysqli_fetch_row($res2))!=null) {
			if ($fila[0]==$fila2[0]) {
				switch ($fila2[3]) {
				case '01':
					$ch=$ch+1;
					$pch=$pch+$fila[5];
					break;
				case '02':
					$lp=$lp+1;
					$plp=$plp+$fila[5];
					break;
				case '03':
					$cba=$cba+1;
					$pcba=$pcba+$fila[5];
					break;
				case '04':
					$oru=$oru+1;
					$poru=$poru+$fila[5];
					break;
				case '05':
					$pt=$pt+1;
					$ppt=$ppt+$fila[5];
					break;
				case '06':
					$tj=$tj+1;
					$ptj=$ptj+$fila[5];
					break;
				case '07':
					$scz=$scz+1;
					$pscz=$pscz+$fila[5];
					break;
				case '08':
					$bn=$bn+1;
					$pbn=$pbn+$fila[5];
					break;
				case '09':
					$pd=$pd+1;
					$ppd=$ppd+$fila[5];
					break;
				default:
					echo"no coincide";
					break;
				}	
			}
		}
	 }
	 echo "<table>";
	echo"<tr><td>CHUQUISACA:</td>";
	if($ch!=0) echo "<td>".($pch/$ch)."</td>";
	else echo "<td>0</td>";
	echo "</tr>";
	echo "<br>";
	echo"<tr><td>LA PAZ: </td>";
	if($lp!=0) echo "<td>".($plp/$lp)."</td>";
	else echo "<td>0</td>";
	echo "</tr>";
	echo "<br>";
	echo"<tr><td>COCHABAMBA: </td>";
	if($cba!=0) echo "<td>".($pcba/$cba)."</td>";
	else echo "<td>0</td>";
	echo "</tr>";
	echo "<br>";
	echo"<tr><td>ORURO: </td>";
	if($oru!=0) echo "<td>".($poru/$oru)."</td>";
	else echo "<td>0</td>";
	echo "</tr>";
	echo "<br>";
	echo"<tr><td>POTOSI: </td>";
	if($pt!=0) echo "<td>".($ppt/$pt)."</td>";
	else echo "<td>0</td>";
	echo "</tr>";
	echo "<br>";
	echo"<tr><td>TARIJA: </td>";
	if($tj!=0) echo "<td>".($ptj/$tj)."</td>";
	else echo "<td>0</td>";
	echo "</tr>";
	echo "<br>";
	echo"<tr><td>SANTA CRUZ: </td>";
	if($scz!=0) echo "<td>".($pscz/$scz)."</td>";
	else echo "<td>0</td>";
	echo "</tr>";
	echo "<br>";
	echo"<tr><td>BENI:</td>";
	if($bn!=0) echo "<td>".($pbn/$bn)."</td>";
	else echo "<td>0</td>";
	echo "</tr>";
	echo "<br>";
	echo"<tr><td>PANDO:</td>";
	if($pd!=0) echo "<td>".($ppd/$pd)."</td>";
	else echo "<td>0</td>";
	echo "</tr>";
	echo "</table>";
	echo "<br>";
	mysqli_close($con);
?>
<?php include "final.inc.php";?>