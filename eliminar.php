<?php
$host = 'localhost';
$dbname = 'evaluacion';
$username = 'root';
$password = 'root';

try {
  $conexion = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

  if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM usuarios WHERE id = :id";
    $statement = $conexion->prepare($sql);
    $statement->execute(['id' => $id]);

    header("Location: index.php");
    exit;
  } else {
    echo "ID no proporcionado.";
  }
} catch (PDOException $error) {
  echo "Error: " . $error->getMessage();
}
?>