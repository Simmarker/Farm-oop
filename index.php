<?php

declare(strict_types=1);

use Farm\Farm;
use Farm\Farmer;
use Farm\Printer;
use Farm\Animal\Cow;
use Farm\Animal\Pig;
use Farm\Animal\Chicken;

require 'vendor/autoload.php';

$farm = new Farm();

for($i = 0; $i < 10; $i++) {
    $farm->addAnimal(new Cow());
}

for($i = 0; $i < 20; $i++) {
    $farm->addAnimal(new Chicken());
}

for($i = 0; $i < 5; $i++) {
    $farm->addAnimal(new Pig());
}

$farmer = new Farmer($farm);

$printer = new Printer($farmer);

$printer->showAnimalsOnFarm();
echo "\n";
$printer->showProductsByDays(7);


