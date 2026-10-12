<?php

$a = $_POST['Numero1'];
$b = $_POST['Numero2'];
$c = $_POST['Numero3'];

//  LAS 3 SON IGUALES
if ($a == $b && $a == $c) {
    echo "Las tres son iguales";
}

//  A Y B SON IGUALES, C DIFERENTE
else if ($a == $b && $c != $a) {
    if ($c > $a) {
        echo "El número $a y el número $b son iguales, y el número $c es mayor";
    } else {
        echo "El número $a y el número $b son iguales, y el número $c es menor";
    }
}

//  A Y C SON IGUALES, B DIFERENTE
else if ($a == $c && $b != $a) {
    if ($b > $a) {
        echo "El número $a y el número $c son iguales, y el número $b es mayor";
    } else {
        echo "El número $a y el número $c son iguales, y el número $b es menor";
    }
}

//  B Y C SON IGUALES, A DIFERENTE
else if ($b == $c && $a != $b) {
    if ($a > $b) {
        echo "El número $b y el número $c son iguales, y el número $a es mayor";
    } else {
        echo "El número $b y el número $c son iguales, y el número $a es menor";
    }
}

//  NINGUNA ES IGUAL
else {
    if ($a > $b && $a > $c) {
        echo "La mayor es A $a. ";
        if ($b > $c) {
            echo "La del medio es B $b, la menor es C $c";
        } else {
            echo "La del medio es C $c, la menor es B $b";
        }
    } else if ($b > $a && $b > $c) {
        echo "La mayor es B $b. ";
        if ($a > $c) {
            echo "La del medio es A $a, la menor es C $c";
        } else {
            echo "La del medio es C $c, la menor es A $a";
        }
    } else {
        echo "La mayor es C $c. ";
        if ($a > $b) {
            echo "La del medio es A $a, la menor es B $b";
        } else {
            echo "La del medio es B $b, la menor es A $a";
        }
    }
}

?>      