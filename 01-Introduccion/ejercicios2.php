<?php
   /* ECHO "[";
    $string = "";
    for ($i = 3; $i <= 30; $i+=3){
        $string = $string . $i .","; CONCATENAR STRINGS
    }
    $string = substr($string, 0, strlen($string)-1);
    echo $string;
    echo"]";
*/

//DATE

echo date ("l j \of Y"); //STRING CON LA FECHA ACTUAL
echo date ("G:i");
echo "<br>";
echo date("d/m/Y");

echo "<br><br>";

echo date("h:i a");
echo "<br>";
echo date ("d/m/Y");

/*
        Usar la estructura switch para mostrar la 
        fecha actual en español. Por ejemplo: 

        "Hoy es jueves 6 de octubre de 2022"
    */

    $d = date("l");

    switch($d) {
        case "Monday": 
            $dia = "Lunes";
            break;
        case "Tuesday": 
            $dia = "Martes";
            break;
        case "Thursday":
            $dia = "Jueves";
            break;
    }

    $ndia = date("j");

    $m = date("F");

    switch($m) {
        case "January":
            $mes = "Enero";
            break;
        case "February":
            $mes = "Febrero";
            break;
        case "October":
            $mes = "Octubre";
            break;
    }

    $anho = date("Y");

    echo "Hoy es $dia $ndia de $mes de $anho";

?>