<?php
require_once("class.php");

// execice 1 //
// $film = new Film(2020,"batman");
// // $film -> setAnnee(1999);
// // echo $film->annee();
// echo $film->annee();
// echo $film->nom();

// exercice 2 //
$calc = new Calculatrice(25,2);

echo "addition : ",Calculatrice::addition(25,2),"</br>";
echo "soustraction : ",Calculatrice::soustraction(2,2),"</br>";
echo "multiplication : ",Calculatrice::multiplication(2,2),"</br>";
echo "division : ",Calculatrice::division(2,2),"</br>";
echo "modulo : ",Calculatrice::modulo(2,2),"</br>";

// exercice 3 //
 ?>
