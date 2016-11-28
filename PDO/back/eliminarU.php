<?php
require_once ('../backIn/classConexion.php');
require_once ('../backIn/metodosSignIn.php');
if(isset($_GET['id'])){
$consultas = new Consultas();
$id = $_GET['id'];
$msj = $consultas->eliminarU($id);
echo $msj;
echo "<div><a href='../frontIn/BuscarEliminarModificar.php'>Volver</a></div>";
}
?>