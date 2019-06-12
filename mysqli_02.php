<?php
include_once('lib_mysql.php');
$sql="select * from usuarios";

bd_conectar();
$datos=bd_consultar($sql);
bd_desconectar();
?>
<html>
<body>
<a href="nuevo.html">Agregar Nuevo</a><br/><br/>
	<table border=1>
		<tr bgcolor='yellow'>
			<td>id</td>
			<td>usuario</td>
			<td>nombre</td>
			<td>clave</td>
			<td>cumple</td>
			<td>acciones</td>
		</tr>
<?php foreach($datos as $f){ ?>
		<tr>
			<td><?=$f['id']?></td>
			<td><?=$f['usuario']?></td>
			<td><?=$f['nombre']?></td>
			<td><?=$f['clave']?></td>
			<td><?=$f['cumple']?></td>
			<td>
			<a href="editar.php?id=<?=$f['id']?>">Editar</a> 
			| 
			<a href="borrar.php?id=<?=$f['id']?>" onclick="return confirm('seguro?')" >Borrar</a>
			</td>
		</tr>		
<?php } ?>
	</table>
</body>
</html>