<h1>Ejercicios</h1>

    <?php
        /*
            -Generar 10 numeros aleatorios entre el 1 y el 10

            -Mostrar dichos numeros indicando si son pares o impares

            -Mostrarlos en una lista

        */

        for ($i = 1; $i <= 10; $i++):
            $numero_aleatorio = rand (1,10);
            if ($numero_aleatorio % 2 == 0):
                echo"<li>$numero_aleatorio es par</li>";
            else:
                echo"<li>$numero_aleatorio es impar</li>";
            endif;
        endfor;


        // 1º Funcion rand
        // 2º Comprobar si es par o impar
        // 3º Impreimirlo en la lista


        /*
            -Imprimir los multiplos de 3 entre 0 y 30
            en "formato array"
            [3, 6, 9...30]

        */

        echo "[";
        for ($i = 3; $i <= 30; $i+=3){
           if ($i < 30) {
            echo  "$i,";

           }else {
            echo  "$i,";
           } 
           
        }
        echo"]";






    ?>

