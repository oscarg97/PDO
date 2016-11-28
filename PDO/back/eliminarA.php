<?php
require_once ('../backIn/classConexion.php');
require_once ('../backIn/metodosAdmin.php');
if(isset($_GET['id'])){
$ad = new Admin();
$id = $_GET['id'];
$msj = $ad->eliminarA($id);
echo $msj;
echo "<div><a href='../frontIn/BuscarEliminarModificar.php'>Volver</a></div>";
}
?>