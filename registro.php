<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
  <div class="register-container">
    <h2>Registro</h2>
    <form action="register.php" method="POST">
      <input type="text" name="username" placeholder="Nombre de usuario" required>
      <input type="password" name="password" placeholder="Contraseña" required>
      <input type="password" name="confirm_password" placeholder="Confirmar contraseña" required>
      <button type="submit">Registrarse</button>
    </form>
    <p>¿Ya tienes una cuenta? <a href="index.php">Inicia sesión aquí</a></p>
  </div>
</body>
</html>