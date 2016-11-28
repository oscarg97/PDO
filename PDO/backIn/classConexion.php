<?php
class Conexion{
	public function connection(){
		$servername = "localhost";
		$username = "cliente";
		$password = "contra";
		$dbname = "noriurumaki";
		try {
    		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    		// set the PDO error mode to exception
    		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    		}
		catch(PDOException $e)
    		{
    		echo "Connection failed: " . $e->getMessage() . "<br>";
    		}
    		return $conn;
	}
}
?>
