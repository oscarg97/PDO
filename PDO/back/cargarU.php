<?php
function seleccionar(){	
	if(isset($_GET['id'])){
	$consultas = new Consultas();
	$id = $_GET['id'];
	$filas = $consultas->buscarU($id);
	foreach ($filas as $fila) {
		echo '<form action="../frontIn/modificarU.php" method="post">
				<table>
					<tr>
						<td>Usuario:</td>
						<td><input type="text" name="usuario" value="'.$fila['usuario'].'"></td>
					</tr>
					<tr>
						<td>Contra:</td>
						<td><input type="text" name="contra" value="'.$fila['contra'].'"></td>
					</tr>
					<tr>
						<td>Nombre:</td>
						<td><input type="text" name="nombre" value="'.$fila['nombre'].'"></td>
					</tr>
					<tr>
						<td>Apellido:</td>
						<td><input type="text" name="ape" value="'.$fila['apellido'].'"></td>
					</tr>
					<tr>
						<td>Direccion:</td>
						<td><textarea rows="5" cols="25" name="dir">'.$fila['direccion'].'</textarea></td>
					</tr>
					<tr>
						<td>Telefono:</td>
						<td><input type="text" name="tel" value="'.$fila['telefono'].'"></td>
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