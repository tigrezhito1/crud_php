<?php
$a=$_POST['txtusuario'];
$b=$_POST['txtnombre'];
$c=$_POST['txtclave'];
$d=$_POST['txtcumple'];
$e=$_POST['txtid'];

$sql="update usuarios set usuario='$a',nombre='$b',clave='$c',cumple='$d'
where id=$e";

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