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

<h1>Ejercicio 7</h1>

<form action="ejercicio7.php" method="post">
<label>Nombre</label><br>
<input type="text" name="nombre"><br><br>
<label>Consola</label><br>
  <select name="consola">
    <option value="PS4">PS4</option>
    <option value="PS5">PS5</option>
    <option value="switch">Switch</option>
  </select><br><br>
  <label>¿Edición especial?</label><br>
  <input type="checkbox" name="especial" value="select"><br><br>
  <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nombre = $_POST["nombre"];
    $consola = $_POST["consola"];
    $especial = "";
if(isset($_POST["especial"])){
    $especial = $_POST["especial"];

}
    if($consola=="ps4"){
        $precio = 60;
    }else if ($consola == "ps5"){
        $precio = 70;
    }else if ($consola == "switch"){
        $precio = 45;
    }
    if ($especial == "si"){
        $precio *= 1.25;
    }
    echo"<h3>El videojuego $nombre vale $precio</h3>";
}
?>

EJERCCIO 7:
Crear un formulario que reciba el nombre de un videojuego, su consola, y si es edición especial.
Se mostrará por pantalla el nombre del juego junto a su precio. El precio será:
40€ si es de la consola Switch, 60€ si es de PS4, y 70€ si es de PS5. La consola se elegirámediante un campo select.
Si el juego es edición especial, valdrá un 25% más. La edición especial se marcará con uncheckbox. 

</body>
</html>