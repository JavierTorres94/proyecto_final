<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$baseDeDatos = "ggg";

$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

if (!$enlace) {
    die("Conexión fallida: " . mysqli_connect_error());
}

session_start();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['id_usuario'])) {
    // Si no ha iniciado sesión, redirigir a la página de inicio de sesión
    header("Location: login.php");
    exit();
}

// Obtener el ID de usuario de la sesión
$id_usuario = $_SESSION['id_usuario'];

// Obtener los datos del formulario de pago
$tipoPago = $_POST['nivel'];
$titular = $_POST['nombre'];
$numeroTarjeta = $_POST['texto1'] . $_POST['texto2'] . $_POST['texto3'] . $_POST['texto4'];
$fechaExpiracion = $_POST['expira'];
$codigoSeguridad = $_POST['crv'];
$montoTotal = 1234.56; // Total fijo

$tipoPagoTexto = '';
if ($tipoPago == '1') {
    $tipoPagoTexto = 'Débito';
} elseif ($tipoPago == '2') {
    $tipoPagoTexto = 'Crédito';
} elseif ($tipoPago == '3') {
    $tipoPagoTexto = 'PayPal';
}

// Insertar los datos en la tabla Pagos
$sql = "INSERT INTO Pagos (id_usuario, tipo_pago, titular, numero_tarjeta, fecha_expiracion, codigo_seguridad, monto_total) 
        VALUES ('$id_usuario', '$tipoPagoTexto', '$titular', '$numeroTarjeta', '$fechaExpiracion', '$codigoSeguridad', '$montoTotal')";

if (mysqli_query($enlace, $sql)) {
    // Mostrar mensaje de éxito y redirigir a inicio.php
    echo "<script>
            alert('Su pago se ha realizado con éxito');
            window.location.href = 'inicio.php';
          </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
}

mysqli_close($enlace);
?>
