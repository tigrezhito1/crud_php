<?php
$a=$_POST['txtusuario'];
$b=$_POST['txtnombre'];
$c=$_POST['txtclave'];
$d=$_POST['txtcumple'];

$sql="insert into usuarios(usuario,clave,nombre,cumple) 
values ('$a','$c','$b','$d')";

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