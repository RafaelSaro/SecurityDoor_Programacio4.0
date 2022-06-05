<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conexion = new mysqli($servername, $username, $password);

// Check connection
if ($conexion->connect_error) {
  die("Connection failed: " . $conexion->connect_error);
}
echo "Connected successfully";
$conexion->select_db("proyecto");
?>