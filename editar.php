<?php

$host = 'localhost';
$dbname = 'evaluacion';
$username = 'root';
$password = 'root';

try {
  $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    
    $sql = "SELECT * FROM usuarios WHERE id = :id";
    $statement = $conexion->prepare($sql);
    $statement->execute(['id' => $id]);
    $comentario = $statement->fetch();

    if (!$comentario) {
      echo "No se encontró el usuario.";
      exit;
    }

    
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $nombre = $_POST['nombre'];
      $email = $_POST['email']; 

      $sql = "UPDATE usuarios SET nombre = :nombre, email = :email WHERE id = :id";
      $statement = $conexion->prepare($sql);
      $statement->execute([
        'nombre' => $nombre,
        'email' => $email,
        'id' => $id
      ]);

      header("Location: index.php");
      exit;
    }
  }

} catch (PDOException $error) {
  echo "Error: " . $error->getMessage();
}

require "editar.view.php";
?>