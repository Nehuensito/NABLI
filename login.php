<?php
session_start();

// Conexión a la base de datos
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "register";

$conn = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$conn) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

// Obtener datos del formulario
$username = $_POST['username'];
$password = $_POST['password'];

// Consulta SQL para verificar las credenciales del usuario
$query = "SELECT * FROM usuarios WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    // Verificar el permiso de administrador
    if ($row['is_admin'] == 1) {
        // Iniciar sesión como administrador
        $_SESSION['username'] = $username;
        $_SESSION['is_admin'] = true;
        header("Location: admin.php"); // Redirigir a la página de administrador
    } else {
        // Iniciar sesión como usuario normal
        $_SESSION['username'] = $username;
        $_SESSION['is_admin'] = false;
        header("Location: user.php"); // Redirigir a la página de usuario normal
    }
} else {
    echo "Nombre de usuario o contraseña incorrectos";
}

mysqli_close($conn);
?>