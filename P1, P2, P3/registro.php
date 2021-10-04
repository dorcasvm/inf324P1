<html>
	<head> 
		<title>FCPN</title>
		<link rel="stylesheet" type="text/css" href="miestilo.css">
	</head>
	<body style="background: #7caccc">
		<div class="cabecera">
			<div style="width: 300;height: 180; float: left;background: #0063a1">
				<img style="width: 200; height: 200;" src="logo.png"/>
			</div>
			<div style="width: 700; height: 180; float: left; background: #0063a1; font-family: Segoe UI ">
				<h1>Universidad Mayor de San Andres</h1>
				<h2>Facultad de Ciencias Puras y Naturales</h2>
			</div>
			
		</div>
		<div class="menu" style="background: #ac0606">
			<ul>
				<li><a style="font-family: Arial; color: #ffffff" href="./index.php">PRINCIPAL</a></li>
				<li><a class="elegido" style="background: #04548f; font-family: Arial Black; color: #ffffff">REGISTRO</a></li>
				<li><a style="font-family: Arial" href="./Informatica">INFORMATICA</a></li>
				<li><a style="font-family: Arial" href="./Matematica">MATEMATICA</a></li>
				<li><a style="font-family: Arial" href="./Biologia">BIOLOGIA</a></li>
			</ul>
		</div>
		<div class="cuerpo">
			<CENTER><H1>R  E  G  I  S  T  R  O</H1></CENTER>
		<form name="pedidos" action="procesa.php" method="GET">
			<center>
			<table>
			<tr><td>Carnet:</td> <td><input type="text" name="carnet" id="carnet"></td></tr>
			<tr><td>Nombre:</td><td> <input type="text" name="nombres" id="nombres"></td></tr>
			<tr><td><label >Fecha de Nacimiento</label></td></tr>
			<tr><td>Dia:
				<select id="d" name="d" placeholder="dd">
					<option>01</option>
					<option>02</option>
					<option>03</option>
					<option>04</option>
					<option>05</option>
					<option>06</option>
					<option>07</option>
					<option>08</option>
					<option>09</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
					<option>13</option>
					<option>14</option>
					<option>15</option>
					<option>16</option>
					<option>17</option>
					<option>18</option>
					<option>19</option>
					<option>20</option>
					<option>21</option>
					<option>22</option>
					<option>23</option>
					<option>24</option>
					<option>25</option>
					<option>26</option>
					<option>27</option>
					<option>28</option>
					<option>29</option>
					<option>30</option>
					<option>31</option>
				</select></td>
			<td>Mes:
				<select id="m" name="m" placeholder="mm">
					<option>01</option>
					<option>02</option>
					<option>03</option>
					<option>04</option>
					<option>05</option>
					<option>06</option>
					<option>07</option>
					<option>08</option>
					<option>09</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
				</select></td>
			<td>Año:
				<select id="a" name="a" placeholder="yyyy">
					<option>1986</option>
					<option>1987</option>
					<option>1988</option>
					<option>1989</option>
					<option>1990</option>
					<option>1991</option>
					<option>1992</option>
					<option>1993</option>
					<option>1994</option>
					<option>1995</option>
					<option>1996</option>
					<option>1997</option>
					<option>1998</option>
					<option>1999</option>
					<option>2000</option>
					<option>2001</option>
					<option>2002</option>
					<option>2003</option>
					<option>2004</option>
					<option>2005</option>	
				</select> 
			</td></tr>
			<tr>
				<td>NroDpto:
					<select id="dpto" name="dpto">
					<option>01</option>
					<option>02</option>
					<option>03</option>
					<option>04</option>
					<option>05</option>
					<option>06</option>
					<option>07</option>
					<option>08</option>
					<option>09</option>
				</select> 
			</td></tr>
			<tr><td colspan=2>
				<input type="hidden" name="tipo" value="nuevo"/>
				<input type="submit" value="REGISTRARSE"></td></tr>
			</center>
			</table>
		</form>
		</div>
	</body>
</html>
