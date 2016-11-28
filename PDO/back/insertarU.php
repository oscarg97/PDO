<?php
require_once ('../backIn/classConexion.php');
require_once ('../backIn/metodosSignIn.php');
$msj = null;
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];
$nombre = $_POST['nombre'];
$ape = $_POST['ape'];
$dir = $_POST['dir'];
$tel = $_POST['tel'];
if(strlen($usuario) > 0 && strlen($contra) > 0 && strlen($nombre) > 0 && strlen($ape) > 0 && strlen($dir) > 0 && strlen($tel) > 0){
	$consultas = new Consultas();
	$msj = $consultas->insertar($usuario, $contra, $nombre, $ape, $dir, $tel);
	echo "Usuario Ingresado correctamente";
	echo "<a href='../frontIn/BuscarEliminarModificar.php'>Volver</a><br>";
}else{
	echo "Por favor completa los campos";
}
?>