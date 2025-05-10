<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="editar.css">
  <title>Document</title>
</head>
<body>
  <h1>Editar</h1>

  <div class="container">
<form action="editar.php?id=<?php echo $comentario['id']; ?>"  method="POST">


    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" value="<?php echo $comentario['nombre']; ?>" required>

    <label for="email">Correo</label>
    <input type="text" id="email" name="email" value="<?php echo $comentario['email']; ?>" required>

    <button class="update" type="submit">Actualizar</button>



  </form>

   <div class="btn-container">
    <a class="btn" href="index.php">Volver</a>
</div>
  </div>

  
</body>
</html>