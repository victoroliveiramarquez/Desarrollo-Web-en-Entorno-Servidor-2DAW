<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
        session_start();
        if (!isset($_SESSION["usuario"])) {
            header('location: iniciar_sesion.php');
        } 

        echo "<p>" . $_SESSION["rol"] . "</p>";

        ?>

        <p>Esto lo puede ver todo el mundo</p>

        <?php
        if ($_SESSION["rol"] == "administrador") {
            echo "<p>Esto solo lo pueden ver los admins</p>";
        }
        ?>

        <a href="desconectarse.php">Cerrar sesión</a>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>