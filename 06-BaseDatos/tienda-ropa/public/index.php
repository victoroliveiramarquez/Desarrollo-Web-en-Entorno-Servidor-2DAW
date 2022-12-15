<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Index</title>
</head>
<body>
    <div class="container">
        <?php require '../header.php' ?>
        <br>
        <h1>Listado de prendas</h1>

        <div class="row">
            <div class="col-9">
                <a class="btn btn-primary" href="insertar_prenda.php">Nueva prenda</a>
                <br><br>
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Talla</th>
                            <th>Precio</th>
                            <th>Categoría</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require '../../util/base_de_datos.php';
                            $sql = "SELECT * FROM prendas";
                            $resultado = $conexion -> query($sql);

                            if ($resultado -> num_rows > 0) {
                                while ($fila = $resultado -> fetch_assoc()) {
                                    $nombre = $fila["nombre"];
                                    $talla = $fila["talla"];
                                    $precio = $fila["precio"];
                                    $categoria = $fila["categoria"];
                                    ?>
                                    <tr>
                                        <td><?php echo $nombre ?></td>
                                        <td><?php echo $talla ?></td>
                                        <td><?php echo $precio ?></td>
                                        <td><?php echo $categoria ?></td>
                                    </tr>
                                    <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="col-3">
                <img width="200" heigth="200" src="../../resources/images/ropa.jpg">
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>