
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nabli</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <div>
            <strong>Nabli</strong>
        </div>
        <nav>
            <a href="#">Explorar</a>
            <a href="titulos.php">Títulos</a>
              <a href="nosotros.php">Sobre nosotros</a>
            <a href="carreras.php">Carreras</a>
            <a href="registro.php" id="loginBtn">Inicia Sesión</a>
            <a href="#" class="btn-primary">Únete de forma gratuita</a>
        </nav>
    </header>

    <section class="hero">
        <div class="hero-text">
            <h1>Alcanza tus objetivos profesionales con Coursera Plus</h1>
            <p>Suscríbase para adquirir las competencias necesarias para el empleo en instituciones de categoría mundial.</p>
        <img src="/mnt/data/aca diseño.png" alt="Imagen" width="300">
    </section>

    <section class="cards">
    <div class="card">
      <h3>Tarjeta 1</h3>
      <p>Este es el contenido de la primera tarjeta.</p>
    </div>
    <div class="card">
      <h3>Tarjeta 2</h3>
      <p>Otro contenido interesante para mostrar.</p>
    </div>
    <div class="card">
      <h3>Tarjeta 3</h3>
      <p>Podrías usar estas tarjetas para productos, servicios o artículos.</p>
    </div>
    <h3>Tarjeta 1</h3>
      <p>Este es el contenido de la primera tarjeta.</p>
    </div>
    <div class="card">
      <h3>Tarjeta 2</h3>
      <p>Otro contenido interesante para mostrar.</p>
    </div>
    <div class="card">
      <h3>Tarjeta 3</h3>
      <p>Podrías usar estas tarjetas para productos, servicios o artículos.</p>
    </div>
  </section>

    <footer class="footer">
        <p>&copy; 2025 Nabli. Todos los derechos reservados.</p>
    </footer>

    <div id="loginModal" class="modal">
        <div class="modal-content">
            <h2>Iniciar sesión</h2>
            <input type="email" placeholder="Correo electrónico (Gmail)">
            <input type="password" placeholder="Contraseña">
            <button onclick="closeModal()">Entrar</button>
        </div>
    </div>

    <script>
        const loginBtn = document.getElementById('loginBtn');
        const loginModal = document.getElementById('loginModal');

        loginBtn.addEventListener('click', () => {
            loginModal.style.display = 'block';
        });

        function closeModal() {
            loginModal.style.display = 'none';
        }

        window.onclick = function(event) {
            if (event.target == loginModal) {
                loginModal.style.display = "none";
            }
        }
    </script>
</body>
</html>

