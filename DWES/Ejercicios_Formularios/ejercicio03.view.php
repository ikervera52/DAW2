<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicios PHP</title>
</head>
<body>
    <h1>Soluciones de ejercicios PHP</h1>
    <h2>Tema 2: Formularios</h2>
    <h3>Ejercicio 3</h3>
    <h4>Enunciado:</h4>
    <p>
        Crea un formulario de contacto para una empresa ficticia que permita a un visitante enviar sus dudas o comentarios. El formulario debe tener los siguientes campos: Asunto, Email, Motivo (desplegable con varias opciones: "Soporte técnico", "Información de productos", "Queja", "Otro"), Mensaje (textarea para texto largo).
    El formulario debe enviarse con el método POST a un archivo PHP. Al recibir los datos, ese PHP debe mostrar un mensaje de confirmación con los datos enviados
    </p>

    <h4>Solución:</h4>

    <?php if(isset($enviado)): ?>
        <p>El formulario se ha enviado con éxito. Estos son los datos recibidos:</p>
        <ul>
            <li><strong>Asunto:</strong> <?= $asunto ?></li>
            <li><strong>Nombre:</strong> <?= $nombre ?></li>
            <li><strong>Email:</strong> <?= $email ?></li>
            <li><strong>Motivo:</strong> <?= $motivo ?></li>
            <li><strong>Mensaje:</strong> <?= nl2br($mensaje) ?></li>
        </ul>

    <?php else: ?>
        <p>Por favor, rellena el formulario de contacto:</p>
    <?php endif; ?>

    <form action="ejercicio03.php" method="POST">
        <label>Asunto:</label><br>
        <input type="text" name="asunto" required><br><br>

        <label>Nombre:</label><br>
        <input type="text" name="nombre" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" required><br><br>

        <label>Motivo:</label><br>
        <select name="motivo" required>
            <option value="">-- Selecciona --</option>
            <option value="Soporte técnico">Soporte técnico</option>
            <option value="Información de productos">Información de productos</option>
            <option value="Queja">Queja</option>
            <option value="Otro">Otro</option>
        </select><br><br>

        <label>Mensaje:</label><br>
        <textarea name="mensaje" rows="5" cols="40" required></textarea><br><br>

        <button type="submit">Enviar</button>
    </form>

</body>
</html>
