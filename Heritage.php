<?php

require 'Forme.php';
require 'Carre.php';
require 'Triangle.php';
require 'Cercle.php';

echo (new Triangle)->aire() . '<br>';
echo (new Carre)->aire() . '<br>';
echo (new Cercle)->aire() . '<br>';