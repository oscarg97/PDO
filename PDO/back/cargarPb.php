<?php
require_once ('../backIn/metodosProductos.php');
function seleccionar(){	
	if(isset($_GET['id'])){
	$productos = new Productos();
	$id = $_GET['id'];
	$filas = $productos->buscarPb($id);
	foreach ($filas as $fila) {
		echo '<form action="../frontIn/modificarPb.php" method="post">
				<table>
					<tr>
						<td>Nombre:</td>
						<td><input type="text" name="nombre" value="'.$fila['nombre'].'"></td>
					</tr>
					<tr>
						<td>Descripcion:</td>
						<td><input type="text" name="des" value="'.$fila['descripcion'].'"></td>
					</tr>
					<tr>
						<td>Precio:</td>
						<td><input type="text" name="precio" value="'.$fila['precio'].'"></textarea></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="hidden" name="id" value="'.$id.'"></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td><input type="submit" value="Modificar" name="btnFinish"></td>
					</tr>
				</table>
			</form>';
		echo "<div><a href='../frontIn/BuscarEliminarModificar.php'>Volver</a></div>";
		}
	}
}
?>