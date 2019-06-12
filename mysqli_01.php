<?php
$cnx=mysqli_connect('localhost','root','','php1','3306');
//var_dump($cnx);

mysqli_query($cnx,"set names utf8");

$sql="SELECT * FROM usuarios";
$bolsa=mysqli_query($cnx,$sql);
//var_dump($bolsa);

while($fila=mysqli_fetch_assoc($bolsa)){
	$datos[]=$fila;
}

mysqli_close($cnx); //liberamos la conexion
mysqli_free_result($bolsa);//limpiamos la variable de datos
unset($fila); //destruimos la variable fila

#var_dump($datos);
?>
<html>
<body>
	<table border=1>
		<tr bgcolor='yellow'>
			<td>id</td>
			<td>usuario</td>
			<td>nombre</td>
			<td>clave</td>
			<td>cumple</td>
		</tr>
<?php foreach($datos as $f){ ?>
		<tr>
			<td><?=$f['id']?></td>
			<td><?=$f['usuario']?></td>
			<td><?=$f['nombre']?></td>
			<td><?=$f['clave']?></td>
			<td><?=$f['cumple']?></td>
		</tr>		
<?php } ?>
	</table>
</body>
</html>