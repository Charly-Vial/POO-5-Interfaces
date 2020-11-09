<?php
require_once 'Car.php';
require_once 'Bike.php';

// class Car
$titine = new Car('Red', 4 , 'Diesel', true, true);
echo 'test de la classe Car <br>';
echo $titine->getLight();
$titine->switchOff();
echo $titine->getLight() . '<br/>';



//class Bike
$velov = new Bike("blue", 1, false);

// test avec vitesse 8
echo 'test de la classe Bike <br>';
$velov->setCurrentSpeed(8);
echo 'speed: ' . $velov->getCurrentSpeed(). '<br/>';
$velov->switchOn();
echo $velov->getLight();

//test avec vitesse 15
$velov->forward();
echo 'speed: ' . $velov->getCurrentSpeed(). '<br/>';
$velov->switchOn();
echo $velov->getLight();

