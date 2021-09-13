<?php

$name = "Janusz";

echo "Imię: $name<br>";
echo 'Imię: $name<br>';

$całkowita = 10;
echo "Całkowita $całkowita<br>";
echo "Binarna " . 0b1011 . "<br>";
echo "Oktalna " . 011 , "<br>";
echo "Heksadecymalna " , 0x11 , "<br>";

$x = 10.5;
echo gettype($x) . "<br>";

$prawda = true;
$fałsz = false;
echo $prawda . "<br>";

echo <<< etykieta
<hr>
Imię: $name<br>Poznań
<hr>
etykieta;

echo <<< 'etykieta'
<hr>
Imię: $name<br>Poznań
<hr>
etykieta;

echo "Nazwa zmiennej z iminiem: \$name<br>";


?>
