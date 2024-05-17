<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orden de Evento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/estilos.css"> 
</head>
<body>
    <div class="container">
        <h1>Orden de Evento</h1>
        <?php
            // Recoger los datos del formulario de reservación
            $tipoEvento = isset($_POST['tipoEvento']) ? $_POST['tipoEvento'] : 'No disponible';
            $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : 'No disponible';
            $nivel = isset($_POST['nivel']) ? $_POST['nivel'] : 'No disponible';
            $aperitivos = isset($_POST['aperitivos']) ? implode(', ', $_POST['aperitivos']) : 'No se seleccionaron aperitivos';
            $platoPrincipal = isset($_POST['platoPrincipal']) ? implode(', ', $_POST['platoPrincipal']) : 'No se seleccionó plato principal';
            $postre = isset($_POST['postre']) ? implode(', ', $_POST['postre']) : 'No se seleccionó postre';
            $musica = isset($_POST['musica']) ? implode(', ', $_POST['musica']) : 'No se seleccionó tipo de música';
        ?>
        <h2>Detalles del Evento</h2>
        <p><strong>Tipo de evento:</strong> <?php echo $tipoEvento; ?></p>
        <p><strong>Fecha del evento:</strong> <?php echo $fecha; ?></p>
        <p><strong>Requerimiento para ingreso:</strong> <?php echo $nivel; ?></p>
        <h2>Opciones de Comida</h2>
        <p><strong>Aperitivos:</strong> <?php echo $aperitivos; ?></p>
        <p><strong>Plato principal:</strong> <?php echo $platoPrincipal; ?></p>
        <p><strong>Postre:</strong> <?php echo $postre; ?></p>
        <p><strong>Música:</strong> <?php echo $musica; ?></p>
        <div class="botones">
            <button onclick="window.print()">Imprimir</button>
            <a href="inicio.html">Cancelar</a>
        </div>
    </div>
</body>
</html>
