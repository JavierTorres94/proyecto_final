<?php
session_start();

// Verificar si el usuario ha iniciado sesión
if(isset($_SESSION['nombre_usuario']) && isset($_SESSION['id_usuario'])) {
    $nombre_usuario = $_SESSION['nombre_usuario'];
    $id_usuario = $_SESSION['id_usuario'];
} else {
    // Si el usuario no ha iniciado sesión, redirigirlo al formulario de inicio de sesión
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="CSS/inicio.css">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Michroma"/>
<title>Inicio</title>
</head>
<body class="body">

    <details class="firstoptions">
        <summary><?php echo htmlspecialchars($nombre_usuario); ?> (ID: <?php echo htmlspecialchars($id_usuario); ?>)</summary>
        <ul>
          <li><a href="editar_cuenta.php">Editar Datos de la Cuenta</a></li>
          <li><a href="login.php">Cerrar Sesión</a></li>
        </ul>
    </details><br>

<div class="topimage"><img src="imagenes/logo.png" width="300" height="200" title="Logo Gestor" alt="logo"></div>

<div class="links">
    <a href="mis_reservas.php">Mis Eventos</a> | <a href="reservar.html">Reservar Evento</a>
</div>

<h1 class="title">Gestor de Grandes Galas (GGG)</h1><br>
<p style="text-align: center; font-family: Michroma; font-size: 20px;">
    ¡Estás a un clic de vivir un momento inolvidable!
</p>

</body>
</html>
