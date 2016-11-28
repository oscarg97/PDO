<?php
class Productos{
	public function cargarPc(){
		$rows = null;
		$conn = new Conexion();
		$conetsion = $conn->connection();
		$query = "SELECT * FROM productoscomida ORDER BY id ASC";
    	$statement = $conetsion->prepare($query);
    	$statement->execute();
    	while($result = $statement->fetch()){
    		$rows[] = $result;
    	}
    	return $rows;
	}
	public function buscarPc($id){
        $rows = null;
		$conn = new Conexion();
		$conetsion = $conn->connection();
		$query = "SELECT * FROM productoscomida WHERE id = :id ORDER BY id ASC";
    	$statement = $conetsion->prepare($query);
    	$statement->bindParam(':id', $id);
  		$statement->execute();
    	while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
	}
	public function insertarPc($nombre,$des,$precio){
		$conn = new Conexion();
		$conetsion = $conn->connection();
		$query = "INSERT INTO productoscomida (nombre, descripcion, precio) VALUES (:nombre, :descripcion, :precio)";
    	$statement = $conetsion->prepare($query);
    	$statement->bindParam(':nombre', $nombre);
    	$statement->bindParam(':descripcion', $des);
    	$statement->bindParam(':precio', $precio);
    	if ($statement) {
    		$statement->execute();
    		return "Exito!";
    	}else{
    		return "Error en la consulta";
    	}
	}
    public function eliminarPc($id){
        $conn = new Conexion();
        $conetsion = $conn->connection();
        $query = "DELETE FROM productoscomida WHERE id = :id";
        $statement = $conetsion->prepare($query);
        $statement->bindParam(':id', $id);
        if($statement){
            $statement->execute();
            return "Exito al eliminar";
        }else{
            return "ERROR";
        }
    }
    public function modificarPc($arg_campo, $arg_valor, $id){
        $conn = new Conexion();
        $conetsion = $conn->connection();
        $query = "UPDATE productoscomida SET $arg_campo = :valor  WHERE id = :id";
        $statement = $conetsion->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->bindParam(':valor', $arg_valor);
        if($statement){
            $statement->execute();
            return "Exito al modificar";
        }else{
            return "ERROR";
        }
    }

    public function cargarPb(){
        $rows = null;
        $conn = new Conexion();
        $conetsion = $conn->connection();
        $query = "SELECT * FROM productosbebida";
        $statement = $conetsion->prepare($query);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    public function buscarPb($id){
        $rows = null;
        $conn = new Conexion();
        $conetsion = $conn->connection();
        $query = "SELECT * FROM productosbebida WHERE id = :id";
        $statement = $conetsion->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
    }
    public function insertarPb($nombre,$des,$precio){
        $conn = new Conexion();
        $conetsion = $conn->connection();
        $query = "INSERT INTO productosbebida (nombre, descripcion, precio) VALUES (:nombre, :descripcion, :precio)";
        $statement = $conetsion->prepare($query);
        $statement->bindParam(':nombre', $nombre);
        $statement->bindParam(':descripcion', $des);
        $statement->bindParam(':precio', $precio);
        if ($statement) {
            $statement->execute();
            return "Exito!";
        }else{
            return "Error en la consulta";
        }
    }
    public function eliminarPb($id){
        $conn = new Conexion();
        $conetsion = $conn->connection();
        $query = "DELETE FROM productosbebida WHERE id = :id";
        $statement = $conetsion->prepare($query);
        $statement->bindParam(':id', $id);
        if($statement){
            $statement->execute();
            return "Exito al eliminar";
        }else{
            return "ERROR";
        }
    }
    public function modificarPb($arg_campo, $arg_valor, $id){
        $conn = new Conexion();
        $conetsion = $conn->connection();
        $query = "UPDATE productosbebida SET $arg_campo = :valor  WHERE id = :id";
        $statement = $conetsion->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->bindParam(':valor', $arg_valor);
        if($statement){
            $statement->execute();
            return "Exito al modificar";
        }else{
            return "ERROR";
        }
    }
}
?>