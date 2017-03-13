<?php

include_once 'Cat.php';
include_once 'Collar.php';

//Sans collier
$minou = new Cat('Minou','gris');
echo $minou->getName();

//Avec collier


$collier_miou = new Collar('12cm','red');
$miou = new Cat ('miou','red','$collier_miou');
$miou->setFatigue(20);
$miou->setImage('');



echo->$miou

while ($miou->isTired()== false){
	$miou->walk();
}
echo $miou;
	if ($miou->isTired()== true){
$miou->rest();
	}
echo $miou;









