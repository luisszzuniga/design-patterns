<?php
include 'car.php';

    
$car1 = new Car();
$car2 = clone $car1;
$car2->setMaker('Audi');

echo $car1->getMaker();

echo $car2->getMaker();