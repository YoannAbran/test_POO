<?php

// exercice 1 //
class Film
{
  protected $_id;
  protected $_nom;
  protected $_realisateur;
  protected $_annee;

// COnstructeur
public function __construct($annee,$nom){
echo"voici le constructeur";
$this->setAnnee($annee);
$this->setNom($nom);
}
//

// Mutateur ou setters
public function setAnnee($annee){
  if(!is_int($annee)){
    trigger_error("ce doit etre un entier !!");
    return;
  }
  if($annee>2020){
    trigger_error("toujours pas sorti");
    return;
  }
  if($annee<1900){
    trigger_error("le cinema n'existait toujours pas");
    return;
  }
    $this->_annee=$annee;
}
public function setNom($nom){
  if(!is_string($nom)){
    trigger_error("ce doit etre un nom !!");
    return;
  }
  $this->_nom=$nom;
}


//
// Accesseur ou getters,
public function id(){
  return $this->_id;
}
public function nom(){
  return $this->_nom;
}
public function realisateur(){
  return $this->_realisateur;
}
public function annee(){
  return $this->_annee;
}
//
}


// exercice 2 //
class Calculatrice
{
  protected $_number1;
  protected $_number2;
//constructeur
public function __construct($number1,$number2){
  $this->setNumber($number1,$number2);
  echo $this->addition($number1,$number2),"</br>";
  echo $this->soustraction($number1,$number2),"</br>";
  echo $this->multiplication($number1,$number2),"</br>";
  echo $this->division($number1,$number2),"</br>";
  echo $this->modulo($number1,$number2),"</br>";

}

public static function addition($number1,$number2){
  $addition = $number1+$number2;
  return $addition;
}
public static function soustraction($number1,$number2){
  $soustraction = $number1-$number2;
  return $soustraction;
}
public static function multiplication($number1,$number2){
  $multiplication = $number1*$number2;
  return $multiplication;
}
public static function division($number1,$number2){
  $division = $number1/$number2;
  return $division;
}
public static function modulo($number1,$number2){
  $modulo = $number1%$number2;
  return $modulo;
}

  //setters
  public function setNumber($number1,$number2){
    if(!is_int($number1)&&!is_int($number2)){
      trigger_error("ce n'est pas un entier !!");
      return;
    }
    $this->_number1=$number1;
    $this->_number2=$number2;

  }
  //getters
  public function number1(){
    return $this->_number1;
  }
  public function number2(){
    return $this->_number2;
  }
}

// exercice 3 //
//class animal
abstract class Animal
{
  function respire(){
    echo "respire";
  }
}

//class oiseau
abstract class Oiseau extends Animal
{
protected $_nom;
protected $_age;

public function __construct($nom,$age){
  $this->vole();
  $this->setNom($nom);
  $this->setAge($age);
  echo $this->nom($nom),"</br>";
  echo $this->age($age),"</br>";

}
public function vole(){
  echo " je suis un oiseau donc je vole </br>";
}
//setters
public function setNom($nom){
  $this->_nom=$nom;
}
public function setAge($age){
  $this->_age=$age;
}
//getters
public function nom(){
  return $this->_nom;
}
public function age(){
  return $this->_age;
}
}

//class reptile
abstract class Reptile extends Animal
{
  protected $_nom;
  protected $_age;
  public function __construct($nom,$age){
    $this->ecaille();
    $this->setNom($nom);
    $this->setAge($age);
    echo $this->nom($nom),"</br>";
    echo $this->age($age),"</br>";
  }

  public function ecaille(){
    echo "je suis un reptile j'ai des ecailles </br>";
  }

  //setters
  public function setNom($nom){
    $this->_nom=$nom;
  }
  public function setAge($age){
    $this->_age=$age;
  }
  //getters
  public function nom(){
    return $this->_nom;
  }
  public function age(){
    return $this->_age;
  }
}

//class aigle et faucon
class Aigle extends Oiseau
{

}
class Faucon extends Oiseau
{

}

//class tortue et crocodile
class Tortue extends Reptile
{

}
class Crocodile extends Reptile
{

}

 ?>
