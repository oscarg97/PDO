<?php
require_once ('../backIn/classConexion.php');
require_once ('../backIn/metodosSignIn.php');
require_once ('../backIn/metodosProductos.php');
require_once ('../backIn/metodosAdmin.php');
function cargarU(){
	$consultas = new Consultas();
	$filas = $consultas->cargarU();
	echo "<table>
			<tr>
				<th>ID</th>
				<th>|</th>
				<th>Usuario</th>
				<th>|</th>
				<th>Contrasena</th>
				<th>|</th>
				<th>Nombre</th>
				<th>|</th>
				<th>Apellido</th>
				<th>|</th>
				<th>Direccion</th>
				<th>|</th>
				<th>Telefono</th>
			</tr>";
	foreach ($filas as $fila){
		echo "<tr>";
		echo "<td>".$fila['id']."</td>";
		echo "<td>|</td>";
		echo "<td>".$fila['usuario']."</td>";
		echo "<td>|</td>";
		echo "<td>".$fila['contra']."</td>";
		echo "<td>|</td>";
		echo "<td>".$fila['nombre']."</td>";
		echo "<td>|</td>";
		echo "<td>".$fila['apellido']."</td>";
		echo "<td>|</td>";
		echo "<td>".$fila['direccion']."</td>";
		echo "<td>|</td>";
		echo "<td>".$fila['telefono']."</td>";
		echo "<td>|</td>";
		echo "<td><a href='back/eliminarU.php?id=".$fila['id']."'>Eliminar</a></td>";
		echo "<td>|</td>";
		echo "<td><a href='../frontIn/modificarVista.php?id=".$fila['id']."'>Modificar</a></td>";
		echo "</tr>";
	}
	echo "<td><a href='../frontIn/Registrarse.html'>Añadir</a></td>";
	echo "</table>";
}
function buscarU($id){
	$consultas = new Consultas();
	$filas = $consultas->buscarU($id);
	echo "<table>
			<tr>
				<th>ID</th>
				<th>-</th>
				<th>Usuario</th>
				<th>-</th>
				<th>Contrasena</th>
				<th>-</th>
				<th>Nombre</th>
				<th>-</th>
				<th>Apellido</th>
				<th>|</th>
				<th>Direccion</th>
				<th>-</th>
				<th>Telefono</th>
			</tr>";
	if(isset($filas)){
		foreach ($filas as $fila){
			echo "<tr>";
			echo "<td>".$fila['id']."</td>";
			echo "<td>|</td>";
			echo "<td>".$fila['usuario']."</td>";
			echo "<td>|</td>";
			echo "<td>".$fila['contra']."</td>";
			echo "<td>|</td>";
			echo "<td>".$fila['nombre']."</td>";
			echo "<td>|</td>";
			echo "<td>".$fila['apellido']."</td>";
			echo "<td>|</td>";
			echo "<td>".$fila['direccion']."</td>";
			echo "<td>|</td>";
			echo "<td>".$fila['telefono']."</td>";
			echo "<td>|</td>";
			echo "<td><a href='back/eliminarU.php?id=".$fila['id']."'>Eliminar</a></td>";
			echo "<td>|</td>";
			echo "<td><a href='../frontIn/modificarVista.php?id=".$fila['id']."'>Modificar</a></td>";
			echo "</tr>";
		}
	}
	echo "</table>";
}
function cargarP(){
	$productos = new Productos();
	$filas = $productos->cargarPc();
	echo "<table>
			<tr>
				<th>ID</th>
				<th>|</th>
				<th>Nombre</th>
				<th>|</th>
				<th>Descripcion</th>
				<th>|</th>
				<th>Precio</th>
			</tr>";
	foreach ($filas as $fila){
		echo "<tr>";
		echo "<td>".$fila['id']."</td>";
		echo "<td>|</td>";
		echo "<td>".$fila['nombre']."</td>";
		echo "<td>|</td>";
		echo "<td>".$fila['descripcion']."</td>";
		echo "<td>|</td>";
		echo "<td>".$fila['precio']."</td>";
		echo "<td>|</td>";
		echo "<td><a href='../back/eliminarPc.php?id=".$fila['id']."'>Eliminar</a></td>";
		echo "<td>|</td>";
		echo "<td><a href='../frontIn/modificarPcVista.php?id=".$fila['id']."'>Modificar</a></td>";
		echo "</tr>";
	}
	echo "<td><a href='../frontIn/IngresarProductosPc.html'>Añadir</a></td>";
	echo "</table>";
}
function buscarP($id){
	$productos = new Productos();
	$filas = $productos->buscarPc($id);
	echo "<table>
			<tr>
				<th>ID</th>
				<th>|</th>
				<th>Nombre</th>
				<th>|</th>
				<th>Descripcion</th>
				<th>|</th>
				<th>Precio</th>
			</tr>";
	if(isset($filas)){
		echo "<tr>";
		echo "<td>".$fila['id']."</td>";
		echo "<td>|</td>";
		echo "<td>".$fila['nombre']."</td>";
		echo "<td>|</td>";
		echo "<td>".$fila['descripcion']."</td>";
		echo "<td>|</td>";
		echo "<td>".$fila['precio']."</td>";
		echo "<td>|</td>";
		echo "<td><a href='../back/eliminarPc.php?id=".$fila['id']."'>Eliminar</a></td>";
		echo "<td>|</td>";
		echo "<td><a href='../frontIn/modificarPcVista.php?id=".$fila['id']."'>Modificar</a></td>";
		echo "</tr>";
	}
	echo "</table>";
}
function cargarPb(){
	$productos = new Productos();
	$filas = $productos->cargarPb();
	echo "<table>
			<tr>
				<th>ID</th>
				<th>|</th>
				<th>Nombre</th>
				<th>|</th>
				<th>Descripcion</th>
				<th>|</th>
				<th>Precio</th>
			</tr>";
	foreach ($filas as $fila){
		echo "<tr>";
		echo "<td>".$fila['id']."</td>";
		echo "<td>|</td>";
		echo "<td>".$fila['nombre']."</td>";
		echo "<td>|</td>";
		echo "<td>".$fila['descripcion']."</td>";
		echo "<td>|</td>";
		echo "<td>".$fila['precio']."</td>";
		echo "<td>|</td>";
		echo "<td><a href='../back/eliminarPb.php?id=".$fila['id']."'>Eliminar</a></td>";
		echo "<td>|</td>";
		echo "<td><a href='../frontIn/modificarPbVista.php?id=".$fila['id']."'>Modificar</a></td>";
		echo "</tr>";
	}
	echo "<td><a href='../frontIn/IngresarProductosPc.html'>Añadir</a></td>";
	echo "</table>";
}
function buscarPb($id){
	$productos = new Productos();
	$filas = $productos->buscarPb($id);
	echo "<table>
			<tr>
				<th>ID</th>
				<th>|</th>
				<th>Nombre</th>
				<th>|</th>
				<th>Descripcion</th>
				<th>|</th>
				<th>Precio</th>
			</tr>";
	if(isset($filas)){
		foreach ($filas as $fila){
			echo "<tr>";
			echo "<td>".$fila['id']."</td>";
			echo "<td>|</td>";
			echo "<td>".$fila['nombre']."</td>";
			echo "<td>|</td>";
			echo "<td>".$fila['descripcion']."</td>";
			echo "<td>|</td>";
			echo "<td>".$fila['precio']."</td>";
			echo "<td>|</td>";
			echo "<td><a href='../back/eliminarPb.php?id=".$fila['id']."'>Eliminar</a></td>";
			echo "<td>|</td>";
			echo "<td><a href='../frontIn/modificarPbVista.php?id=".$fila['id']."'>Modificar</a></td>";
			echo "</tr>";
		}
	}
	echo "</table>";
}
// function cargarA(){
// 	$ad = new Admin();
// 	$filas = $ad->cargarA();
// 	echo "<table>
// 			<tr>
// 				<th>ID</th>
// 				<th>|</th>
// 				<th>Usuario</th>
// 				<th>|</th>
// 				<th>PIN</th>
// 				<th>|</th>
// 				<th>Nombre</th>
// 				<th>|</th>
// 				<th>Apellido</th>
// 				<th>|</th>
// 				<th>e-mail</th>
// 				<th>|</th>
// 				<th>Direccion</th>
// 				<th>|</th>
// 				<th>Telefono</th>
// 			</tr>";
// 	foreach ($filas as $fila){
// 		echo "<tr>";
// 		echo "<td>".$fila['id']."</td>";
// 		echo "<td>|</td>";
// 		echo "<td>".$fila['usuario']."</td>";
// 		echo "<td>|</td>";
// 		echo "<td>".$fila['pin']."</td>";
// 		echo "<td>|</td>";
// 		echo "<td>".$fila['nombre']."</td>";
// 		echo "<td>|</td>";
// 		echo "<td>".$fila['apellido']."</td>";
// 		echo "<td>|</td>";
// 		echo "<td>".$fila['email']."</td>";
// 		echo "<td>|</td>";
// 		echo "<td>".$fila['direccion']."</td>";
// 		echo "<td>|</td>";
// 		echo "<td>".$fila['telefono']."</td>";
// 		echo "<td>|</td>";
// 		echo "<td><a href='../back/eliminarA.php?id=".$fila['id']."'>Eliminar</a></td>";
// 		echo "<td>|</td>";
// 		echo "<td><a href='../frontIn/modificarVista.php?id=".$fila['id']."'>Modificar</a></td>";
// 		echo "</tr>";
// 	}
// 	echo "</table>";
// }
// function buscarA($id){
// 	$ad = new Admin();
// 	$filas = $ad->buscarA($id);
// 	echo "<table>
// 			<tr>
// 				<th>ID</th>
// 				<th>-</th>
// 				<th>Usuario</th>
// 				<th>-</th>
// 				<th>PIN</th>
// 				<th>-</th>
// 				<th>Nombre</th>
// 				<th>-</th>
// 				<th>Apellido</th>
// 				<th>|</th>
// 				<th>e-mail</th>
// 				<th>|</th>
// 				<th>Direccion</th>
// 				<th>-</th>
// 				<th>Telefono</th>
// 			</tr>";
// 	if(isset($filas)){
// 		foreach ($filas as $fila){
// 			echo "<tr>";
// 			echo "<td>".$fila['id']."</td>";
// 			echo "<td>|</td>";
// 			echo "<td>".$fila['usuario']."</td>";
// 			echo "<td>|</td>";
// 			echo "<td>".$fila['pin']."</td>";
// 			echo "<td>|</td>";
// 			echo "<td>".$fila['nombre']."</td>";
// 			echo "<td>|</td>";
// 			echo "<td>".$fila['apellido']."</td>";
// 			echo "<td>|</td>";
// 			echo "<td>".$fila['email']."</td>";
// 			echo "<td>|</td>";
// 			echo "<td>".$fila['direccion']."</td>";
// 			echo "<td>|</td>";
// 			echo "<td>".$fila['telefono']."</td>";
// 			echo "<td>|</td>";
// 			echo "<td><a href='../back/eliminarA.php?id=".$fila['id']."'>Eliminar</a></td>";
// 			echo "<td>|</td>";
// 			echo "<td><a href='../frontIn/modificarVista.php?id=".$fila['id']."'>Modificar</a></td>";
// 			echo "</tr>";
// 		}
// 	}
// 	echo "</table>";
// }
// function cargarP(){
// 	$productos = new Productos();
// 	$filas = $productos->cargarPc();
// 	foreach ($filas as $fila){
// 		// dentro de aqui va una estructura html
// 		echo "<tr>";
// 		echo "<td>".$fila['id']."</td>";
// 		echo "<td>|</td>";
// 		echo "<td>".$fila['nombre']."</td>";
// 		echo "<td>|</td>";
// 		echo "<td>".$fila['descripcion']."</td>";
// 		echo "<td>|</td>";
// 		echo "<td>".$fila['precio']."</td>";
// 		echo "<td>|</td>";
// 		echo "<td><a href='../back/eliminarPc.php?id=".$fila['id']."'>Eliminar</a></td>";
// 		echo "<td>|</td>";
// 		echo "<td><a href='../frontIn/modificarPcVista.php?id=".$fila['id']."'>Modificar</a></td>";
// 		echo "</tr>";
// 	}
// }
// function cargarPb(){
// 	$productos = new Productos();
// 	$filas = $productos->cargarPb();
// 	foreach ($filas as $fila){
// 		echo "<tr>";
// 		echo "<td>".$fila['id']."</td>";
// 		echo "<td>|</td>";
// 		echo "<td>".$fila['nombre']."</td>";
// 		echo "<td>|</td>";
// 		echo "<td>".$fila['descripcion']."</td>";
// 		echo "<td>|</td>";
// 		echo "<td>".$fila['precio']."</td>";
// 		echo "<td>|</td>";
// 		echo "<td><a href='../back/eliminarPb.php?id=".$fila['id']."'>Eliminar</a></td>";
// 		echo "<td>|</td>";
// 		echo "<td><a href='../frontIn/modificarPbVista.php?id=".$fila['id']."'>Modificar</a></td>";
// 		echo "</tr>";
// 	}
// }
// http://localhost:8080/Nori/PDO/frontIn/Inicio.html
?>