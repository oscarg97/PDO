<?php
require_once ('../backIn/classConexion.php');
require_once ('../backIn/metodosSignIn.php');
$msj = null;
$consultas = new Consultas();
$id = $_POST['id'];
$usuario = $_POST['usuario'];
$contra = $_POST['contra'];
$nombre = $_POST['nombre'];
$ape = $_POST['ape'];
$dir = $_POST['dir'];
$tel = $_POST['tel'];
if(strlen($usuario) > 0 && strlen($contra) > 0 && strlen($nombre) > 0 && strlen($ape) > 0 && strlen($dir) > 0 && strlen($tel) > 0){
	$msj = $consultas->modificarU("usuario", $usuario, $id);
	$msj = $consultas->modificarU("contra", $contra, $id);
	$msj = $consultas->modificarU("nombre", $nombre, $id);
	$msj = $consultas->modificarU("apellido", $ape, $id);
	$msj = $consultas->modificarU("direccion", $dir, $id);
	$msj = $consultas->modificarU("telefono", $tel, $id);
	echo $msj."<br>";
	echo "Ingresaste el nombre: <h1>".$nombre."</h1><br>";
	echo "Ingresaste la descripcion: <h1>".$des."</h1><br>";
	echo "Ingresaste el precio: <h1>".$precio."</h1><br>";
	echo "<div><a href='BuscarEliminarModificar.php'>Volver</a></div>";
}else{
	echo "Error, campos vacios";
}
?>