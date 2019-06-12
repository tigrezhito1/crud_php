<?php
$elegido=$_GET['id'];
echo "Elegiste modificar: $elegido";
$sql="select * from usuarios where id=$elegido";

include_once('lib_mysql.php');
bd_conectar();
$w=bd_consultar($sql);

//var_dump($w);
bd_desconectar();
?>
<html>
<body>
	<form name="f1" method="post" action="editar_grabar.php">
	id: <input type="text" name="txtid" readonly value="<?=$w[0]['id']?>"><br/>
	usuario: <input type="text" name="txtusuario" value="<?=$w[0]['usuario']?>"><br/>
	nombre: <input type="text" name="txtnombre" value="<?=$w[0]['nombre']?>"><br/>
	clave: <input type="text" name="txtclave" value="<?=$w[0]['clave']?>"><br/>
	cumple: <input type="date" name="txtcumple" value="<?=$w[0]['cumple']?>"><br/>
	<input type="submit" value="grabar">
	</form>
</body>
</html>