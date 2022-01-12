<?php

require 'Forme.php';
require 'Carre.php';
require 'Triangle.php';
require 'Cercle.php';


echo 'aire carré Parent: ' . (new Forme)->aireForme() . '<br>';
echo 'aire carre enfant: ' . (new Carre)->aireForme() . '<br>';
echo 'aire carré: ' . (new Carre)->aireCarre() . '<br>';