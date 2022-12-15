<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Arrays Multidimensionales</title>
</head>
<body>
    <?php
        $juegos = [
            ["Pacman", "Atari", 60],
            ["Fortnite", "PS4", 0],
            ["Mario Kart", "Super Nintendo", 70],
            ["Street Fighter", "PS4", 50],
            ["Legend of Zelda", "Nintendo 64", 40],
            ["Castelvania", "Nintendo 64", 55],
        ];

        $nuevo_juego = array("Fruit Ninja", "Móvil",0);

        array_push($juegos,$nuevo_juego);

        unset($juegos[1]);
        $titulo = array_colum($juegos, 0);
        $consola = array_column($juegos, 1);
        array_multisort($consola, SORT_ASC,$titulo,SORT_DESC,$juegos);
    ?>
    <table>
        <tr>
            <th>Título</th>
            <th>Consola</th>
            <th>Precio</th>
        </tr>
        <?php
        foreach ($juegos as $juego) {
            list($titulo, $consola, $precio) = $juego;
        ?>
            <tr>
                <td><?php echo $titulo ?></td>
                <td><?php echo $consola ?></td>
                <td><?php echo $precio ?></td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>
</html>