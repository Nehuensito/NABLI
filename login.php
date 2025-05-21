<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Login</title>
</head>
<body>
    <header>
        <div>
            <strong>Nabli</strong>
        </div>
        <nav>
            <a href="#">Explorar</a>
            <a href="#">Títulos</a>
              <a href="#">cerra sesion</a>
            <a href="#">Carreras</a>
            <a href="#" id="loginBtn">Inicia Sesión</a>
            <a href="#" class="btn-primary">Únete de forma gratuita</a>
        </nav>
    </header>
  <h2>Iniciar Sesión</h2>

  <form action="/procesar_login" method="post">
    <label for="usuario">Usuario:</label><br>
    <input type="text" id="usuario" name="usuario" required><br><br>

    <label for="contrasena">Contraseña:</label><br>
    <input type="password" id="contrasena" name="contrasena" required><br><br>

    <input type="submit" value="Entrar">
  </form>

</body>
</html>