<h1>Ejercicio 5</h1>

<?php
    $base = $_GET["base"];
    $exponente = $_GET["exponente"];

    $resultado = 1;

    if ($exponente < 0){
        echo "<p>El exponente debe ser positivo</p>";
    }else if ($exponente == 0){
        echo "<p>$resultado</p>";
    }else {

    for ($i = 1; $i <= $exponente;$i++){
        $resultado = $resultado * $base;
    }
    
    echo "<p>$resultado</p>";
}
/*
EJERCICIO 5:
Formulario que reciba dos números. Devolver el resultado de elevar el primero al segundo. 
Asegurarse de que funciona con cualquier valor válido.
No se admiten exponentes negativos. vale
*/
?>