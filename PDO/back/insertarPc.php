<?php
require_once ('../backIn/classConexion.php');
require_once ('../backIn/metodosProductos.php');
$msj = null;
$nombre = $_POST['nombre'];
$des = $_POST['des'];
$precio = $_POST['precio'];
if(strlen($nombre) > 0 && strlen($des) > 0 && strlen($precio) > 0){
	$prod = new Productos();
	$msj = $prod->insertarPc($nombre, $des, $precio);
	echo "Comida Ingresada correctamente";
	echo "<a href='../frontIn/BuscarEliminarModificar.php'>Volver</a><br>";
}else{
	echo "Por favor completa los campos";
}
?>