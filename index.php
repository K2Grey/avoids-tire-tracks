<?php

require_once 'Car.php';

$car = new Car();

var_dump($car->getParkBrake());

try {
    $car->start();
} catch (Exception $e) {
    echo $e->getMessage();
    $car->setParkBrake(0);
    var_dump($car->getParkBrake());
} finally {
    echo 'Ma voiture roule comme un donut';
}
