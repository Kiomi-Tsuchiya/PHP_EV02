<?php

try {
  $conexion = new PDO("mysql:host=localhost;dbname=evaluacion", "root", "root");
} catch (PDOException $error) {
  echo "Error: " . $error->getMessage();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];

  
  $sql = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
  $conexion->exec($sql);
}


$usuarios = $conexion->query("SELECT * FROM usuarios ORDER BY id ASC")->fetchAll();

require "index.view.php";
?>