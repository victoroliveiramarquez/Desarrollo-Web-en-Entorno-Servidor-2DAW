<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>Videojuegos</title>

</head>
<body>
    <h1>Index de videojuegos</h1>
    <?php
    
    echo "<p>$mensaje</p>";

    echo"<ul>";
    foreach ($videojuegos as $videojuego){
        echo "<li>$videojuegos</li>";
    }
    echo "</ul>";
    
    ?>
</body>
</html>