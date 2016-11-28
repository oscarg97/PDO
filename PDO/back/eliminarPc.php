<?php
require_once ('../backIn/classConexion.php');
require_once ('../backIn/metodosProductos.php');
if(isset($_GET['id'])){
$prod = new Productos();
$id = $_GET['id'];
$msj = $prod->eliminarPc($id);
echo $msj;
echo "<div><a href='../frontIn/BuscarEliminarModificar.php'>Volver</a></div>";
}
?>