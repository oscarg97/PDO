<?php
class Consultas{
	public function cargarU(){
		$rows = null;
		$conn = new Conexion();
		$conetsion = $conn->connection();
		$query = "SELECT * FROM usuarios";
    	$statement = $conetsion->prepare($query);
    	$statement->execute();
    	while($result = $statement->fetch()){
    		$rows[] = $result;
    	}
    	return $rows;
	}
	public function buscarU($id){
        $rows = null;
		$conn = new Conexion();
		$conetsion = $conn->connection();
		$query = "SELECT * FROM usuarios WHERE id = :id";
    	$statement = $conetsion->prepare($query);
    	$statement->bindParam(':id', $id);
  		$statement->execute();
    	while($result = $statement->fetch()){
            $rows[] = $result;
        }
        return $rows;
	}
	public function insertar($usuario,$contra,$nombre, $ape ,$dir,$tel){
		$conn = new Conexion();
		$conetsion = $conn->connection();
		$query = "INSERT INTO usuarios (usuario, contra, nombre, apellido, direccion, telefono) VALUES (:usuario, :contra, :nombre, :ape, :direccion, :telefono)";
    	$statement = $conetsion->prepare($query);
    	$statement->bindParam(':usuario', $usuario);
    	$statement->bindParam(':contra', $contra);
    	$statement->bindParam(':nombre', $nombre);
        $statement->bindParam(':ape', $ape);
    	$statement->bindParam(':direccion', $dir);
    	$statement->bindParam(':telefono', $tel);
    	if ($statement) {
    		$statement->execute();
    		return "Exito!";
    	}else{
    		return "Error en la consulta";
    	}
	}
    public function eliminarU($id){
        $conn = new Conexion();
        $conetsion = $conn->connection();
        $query = "DELETE FROM usuarios WHERE id = :id";
        $statement = $conetsion->prepare($query);
        $statement->bindParam(':id', $id);
        if($statement){
            $statement->execute();
            return "Exito al eliminar";
        }else{
            return "ERROR";
        }
    }
    public function modificarU($arg_campo, $arg_valor, $id){
        $conn = new Conexion();
        $conetsion = $conn->connection();
        $query = "UPDATE usuarios SET $arg_campo = :valor  WHERE id = :id";
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
/*$servername = "localhost";
$username = "cliente";
$password = "contra";
$dbname = "noriurumaki";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT id, usuario, contra FROM usuarios"); 
    $stmt->execute();
    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;*/
?>