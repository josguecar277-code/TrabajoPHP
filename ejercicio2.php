<?php

$numero = rand(1,100);
echo $numero . "<br>"; 

if ($numero == 50) {
echo " El numero es igual a 50";

} else if($numero < 50) {
    echo " El numero es menor o igual 50";
} else  {
    echo "el numero es mayor o igual 50";
}
?>