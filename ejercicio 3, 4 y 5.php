<?php

echo"<h2>Ejercicio 2</h2>";
echo"<h3>Retornar un Valor aleatorio</h3>";

$numero = rand(1,100);

echo $numero . "<br>"; 

if ($numero == 50) {
echo " El numero es exactamente igual a 50";

} else if($numero < 50) {
    echo " El numero es menor a 50";
} else  {
    echo "el numero es mayor a 50";
}


echo "<h2>Ejercio 3</h2>";
echo "<h3>Una variable de cada tipo: integer, double, string y boolean. </h3>";

$edad = 22; //integer
$estatura = 1.73; //double o float
$Nombre = "Jonny"; //string
$esAprendiz = true; //boolean

echo "Mi nombre es $Nombre, tengo $edad años y mi estatura es:$estatura <br>";
if ( $esAprendiz == true){
    echo "Si es aprendiz "; 
    echo "<hr>";
    

}


echo "<h2> Ejercicio 4</h2>";
echo"<h3>Definir tres variables enteras</h3>";
$año1 = 2004;
$año2 = 1992;
$año3 = 1627;


echo "El primer año $año1 fue un hecho que marco ese año por el nacimiento de plataformas que cambiaron el mundo digital, mientras el año $año2 fue el fin oficial de la guerra fria tras la disolucion de la union sovietica y para termianr el año $año3 esta marcado en la biologia marina como el año estimado del nacimiento del tiburon de Groelandia mas longevo del que se tiene registro.";

echo "<hr>";




echo "<h2>Ejercicio 5</h2>";
echo"<h3>Valor aleatorio entre 20 y 25</h3>";

$numero = rand(20, 25);
echo $numero . "<br>";

if ($numero ==20){
    echo "Veinte";
}elseif($numero ==21){
    echo "Veintiuno";
}elseif ($numero ==22){
    echo "Veintidos";
}elseif ($numero ==23){
    echo "Veintitres";
}elseif ($numero ==24){
    echo "Veinticuatro";
}elseif ($numero ==25){
    echo "Veinticinco";
}

?>