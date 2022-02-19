<?php

require 'vendor/autoload.php';

echo (new Carre(4))->aire() . '<br>';
echo (new Cercle(3))->aire() . '<br>';
echo (new Triangle(3,2))->aire() . '<br>';

echo (new Chien)->communiquer() . '<br>';
echo (new Chat)->communiquer() . '<br>';


function criAnimal(Animal $animal)
{
    $animal->communiquer();
}

criAnimal(new Chat);
criAnimal(new Chien);

echo __DIR__;