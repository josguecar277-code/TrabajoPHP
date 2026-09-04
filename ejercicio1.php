<?php

$a = 18;
$b = 15;
$c = 16;

// TODAS SON IGUALES
if ($a == $b && $a == $c) {

    echo "Las tres variables son iguales.";

}

// A Y B SON IGUALES
else if ($a == $b && $c != $a) {

    if ($c > $a) {
        echo "A y B son iguales y C es mayor.";
    } else {
        echo "A y B son iguales y C es menor.";
    }

}
// A Y C SON IGUALES
else if ($a == $c && $b != $a) {

    if ($b > $a) {
        echo "A y C son iguales y B es mayor.";
    } else {
        echo "A y C son iguales y B es menor.";
    }

}

// B Y C SON IGUALES
else if ($b == $c && $a != $b) {

    if ($a > $b) {
        echo "B y C son iguales y A es mayor.";
    } else {
        echo "B y C son iguales y A es menor.";
    }

}


// NINGUNA ES IGUAL
else {  

    // A ES LA MAYOR
    if ($a > $b && $a > $c) {

        echo "La variable mayor es A.<br>";

        if ($b > $c) {
            echo "La variable del medio es B.<br>";
            echo "La variable menor es C.";
        } else {
            echo "La variable del medio es C.<br>";
            echo "La variable menor es B.";
        }

    }


    // B ES LA MAYOR
    else if ($b > $a && $b > $c) {

        echo "La variable mayor es B.<br>";

        if ($a > $c) {
            echo "La variable del medio es A.<br>";
            echo "La variable menor es C.";
        } else {
            echo "La variable del medio es C.<br>";
            echo "La variable menor es A.";
        }

    }


    // C ES LA MAYOR
    else {

        echo "La variable mayor es C.<br>";

        if ($a > $b) {
            echo "La variable del medio es A.<br>";
            echo "La variable menor es B.";
        } else {
            echo "La variable del medio es B.<br>";
            echo "La variable menor es A.";
        }
 
    }

}

?>