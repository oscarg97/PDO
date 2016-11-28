<?php
class Admin{
	public function cargarA(){
		$rows = null;
		$conn = new Conexion();
		$conetsion = $conn->connection();
		$query = "SELECT * FROM administrador";
    	$statement = $conetsion->prepare($query);
    	$statement->execute();
    	while($result = $statement->fetch()){
    		$rows[] = $result;
    	}
    	return $rows;
	}
	public function buscarA($id){
        $rows = null;
		$conn = new Conexion();
		$conetsion = $conn->connection();
		$query = "SELECT * FROM administrador WHERE id = :id";
    	$statement = $conetsion->prepare($query);
    	$statement->bindParam(':id', $id);
  		$statement->execute();
    	while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
	}
    public function buscarA2($usuario,$pin){
        $rows = null;
        $conn = new Conexion();
        $conetsion = $conn->connection();
        $query = "SELECT * FROM administrador WHERE usuario like :usuario and pin = :pin";
        $statement = $conetsion->prepare($query);
        $statement->bindParam(':usuario', $usuario);
        $statement->bindParam(':pin', $pin);
        $statement->execute();
        while($result = $statement->fetch()){
            $rows[]= $result;
        }
        return $rows;
    }
	public function insertarA($usuario,$pin,$nombre,$ape,$email,$dir,$tel){
		$conn = new Conexion();
		$conetsion = $conn->connection();
		$query = "INSERT INTO administrador (usuario, pin, nombre, apellido, email, direccion, telefono) VALUES (:usuario, :pin, :nombre, :apellido, :email, :direccion, :telefono)";
    	$statement = $conetsion->prepare($query);
        $statement->bindParam(':usuario', $usuario);
        $statement->bindParam(':pin', $pin);
        $statement->bindParam(':nombre', $nombre);
    	$statement->bindParam(':apellido', $ape);
    	$statement->bindParam(':direccion', $dir);
    	$statement->bindParam(':telefono', $tel);
    	if ($statement) {
    		$statement->execute();
    		return "Exito!";
    	}else{
    		return "Error en la consulta";
    	}
	}
    public function eliminarA($id){
        $conn = new Conexion();
        $conetsion = $conn->connection();
        $query = "DELETE FROM administrador WHERE id = :id";
        $statement = $conetsion->prepare($query);
        $statement->bindParam(':id', $id);
        if($statement){
            $statement->execute();
            return "Exito al eliminar";
        }else{
            return "ERROR";
        }
    }
    public function modificarA($arg_campo, $arg_valor, $id){
        $conn = new Conexion();
        $conetsion = $conn->connection();
        $query = "UPDATE administrador SET $arg_campo = :valor  WHERE id = :id";
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