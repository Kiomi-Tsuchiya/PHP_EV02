<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <h1>Gestión de Usuarios</h1>

  <!-- Formulario para agregar un nuevo usuario -->
  <form action="index.php" method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="email" name="email" placeholder="Correo Electrónico" required>
    <button type="submit">Agregar Usuario</button>
  </form>

  <h2>Lista de Usuarios</h2>
  <table>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Acciones</th>
    </tr>
    
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
      <td><?= $usuario['id'] ?></td>
      <td><?= htmlspecialchars($usuario['nombre']) ?></td>
      <td><?= htmlspecialchars($usuario['email']) ?></td>
      <td><a href="#">Editar</a> | <a href="#">Eliminar</a></td>
    </tr>
    <?php endforeach; ?>

  </table>
</body>
</html>