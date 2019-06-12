<?php
$cnx='';
#--------------
function bd_conectar(){
	global $cnx;
	$cnx=mysqli_connect('localhost','root','','php1','3306');
	//mysqli_query($cnx,"set names utf8");

	if(!$cnx)
{
    echo "<h6>No se ha podido conectar PHP - MySQL, verifique sus datos.</h6><hr><br>";
}
else
{
    echo "<h6>Conexion Exitosa PHP - MySQL</h6><hr><br>";
}

}
#--------------
function bd_consultar($query=''){
	global $cnx;
	$bolsa=mysqli_query($cnx,$query);
	while($fila=mysqli_fetch_assoc($bolsa)){
		$datos[]=$fila;
	}
	mysqli_free_result($bolsa);
	return $datos;
}
#--------------
function bd_ejecutar($query=''){
	global $cnx;
	$indicador=mysqli_query($cnx,$query);
	if($indicador==1){
		return 1;
	}else{
		return 0;
	}
}
#--------------
function bd_desconectar(){
	global $cnx;
	mysqli_close($cnx);
}
?>