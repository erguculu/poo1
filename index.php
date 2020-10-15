<?php
require_once 'car.php';
require_once 'Bicycle.php';
$bike = new Bicycle('White');
// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake()."<br>";

// Instanciation d'un nouvel objet $rockrider
$rockrider = new Bicycle('Red');
// Instanciation d'un nouvel objet $tornado

$tornado = new Bicycle('Black');

//Instanciation d'un nouvel objet $redkit depuis class car

$redkit = new Car('Red','Diesel',4,4);
echo $redkit->start();
echo '<br> Vitesse de la voiture : ' . $redkit->getCurrentSpeed() . ' km/h' . '<br>';
echo '<br> l\'énergie de la voiture : ' . $redkit->getEnergyLevel() . '<br>';
while ($redkit->getCurrentSpeed() < 100){
    echo $redkit->forward();
    echo '<br> Vitesse de la voiture : ' . $redkit->getCurrentSpeed() . ' km/h' . '<br>';
}
"<br>";

while ($redkit->getCurrentSpeed() >0){
    echo $redkit->brake();
    echo '<br> Vitesse de la voiture : ' . $redkit->getCurrentSpeed() . ' km/h' . '<br>';
}

