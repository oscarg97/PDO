<?php
require_once ('../backIn/classConexion.php');
require_once ('../back/verT.php');
require_once ('../backIn/metodosAdmin.php');
$msj = null;
$usuario = $_POST['usuario'];
$pin = $_POST['pin'];
$count = 0;
if(count == 3){
	echo "Hola";
}else{
	if(strlen($pin) > 0 && strlen($usuario) > 0){
	$ad = new Admin();
	$msj = $ad->buscarA2($usuario, $pin);
}else{
	echo "Por favor completa los campos";
	echo "<br>";
}
if($msj){
	echo "<a href='../frontIn/BuscarEliminarModificar.php'>Inicio</a><br>";
}else{
	echo "No trabaja aqui";
	echo "<br>";
	$count = $count + 1;
}
}
?>