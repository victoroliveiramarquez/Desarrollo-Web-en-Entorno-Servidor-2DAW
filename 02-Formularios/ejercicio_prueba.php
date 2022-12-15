<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
        <form action="ejercicio_prueba.php" method="post">
            <label>Número</label><br>
            <input type="text" name="numero"><br><br>
            <input type="hidden" name = "f" value="f_numero">
            <input type="submit" value="Enviar">
        </form>

        <form action="ejercicio_prueba.php" method="post">
            <label>Nombre</label><br>
            <input type="text" name="nombre"><br><br>
            <input type="hidden" name = "f" value="f_nombre">
            <input type="submit" value="Enviar">
        </form>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST"){ //$_SERVER es una variable(array asociativo) que de por si contiene mucha info y se almacena información del servidor
                echo $_POST{"f"};
            }
        ?>
</body>
</html>