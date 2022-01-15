<?php

require 'Forme.php';
require 'Carre.php';
require 'Triangle.php';
require 'Cercle.php';
require 'Person.php';
require 'Policier.php';

//echo 'aire carré Parent: ' . (new Forme)->aireForme() . '<br>';
//echo 'aire carre enfant: ' . (new Carre)->aireForme() . '<br>';
//echo 'aire carré: ' . (new Carre)->aireCarre() . '<br>';

//echo (new Person('Bob','Denard',23))->fullname();
echo (new Policier('Mike','Dan',34,'Sergent'))->fullname();