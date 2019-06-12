<?php
$e=$_GET['id'];

$sql="delete from usuarios where id=$e";

include_once('lib_mysql.php');
bd_conectar();
$x=bd_ejecutar($sql);
bd_desconectar();

if($x==1){
	header('location: mysqli_02.php');
}else{
	echo "Error: <br/>$sql";
}
?>