<?php
require_once ('../backIn/classConexion.php');
require_once ('../backIn/metodosProductos.php');
$msj = null;
$productos = new Productos();
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$des = $_POST['des'];
$precio = $_POST['precio'];
if(strlen($nombre) > 0 && strlen($des) > 0 && strlen($precio) > 0){
	$msj = $productos->modificarPc("nombre", $nombre, $id);
	$msj = $productos->modificarPc("descripcion", $des, $id);
	$msj = $productos->modificarPc("precio", $precio, $id);
	echo $msj."<br>";
	echo "Ingresaste el nombre: <h1>".$nombre."</h1><br>";
	echo "Ingresaste la descripcion: <h1>".$des."</h1><br>";
	echo "Ingresaste el precio: <h1>".$precio."</h1><br>";
	echo "<div><a href='BuscarEliminarModificar.php'>Volver</a></div>";
}else{
	echo "Error, campos vacios";
}
?>