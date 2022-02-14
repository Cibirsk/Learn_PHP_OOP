<?php

require 'vendor/autoload.php';

echo (new Carre(4))->aire() . '<br>';
echo (new Cercle(3))->aire() . '<br>';
echo (new Triangle(3,2))->aire() . '<br>';