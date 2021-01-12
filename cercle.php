<?php

// Rayon du cercle
$diam = 10 ;
$rayon = $diam / 2;
echo "la rayon est de ". $rayon."</br>";

// Circonference du cercle
const PI = 3.14;
$circonf = 2 * PI * $rayon ;
echo "la circonference d'un cercle est de ". $circonf."</br>";

// Air du cercle
$air = PI * pow($rayon, 2) ;
echo "l'air d'un cercle est de ". $air."</br>";

?>