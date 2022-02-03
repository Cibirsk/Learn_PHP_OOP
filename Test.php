<?php

require 'src/Person.php';
require 'src/League.php';
require 'src/Team.php';


$paris = new Team('Paris');
$nantes = new Team('Nantes');

$bob = new Personne('Bob');
$mike = new Personne('Mike');
$bob->favorite($paris);
$mike->favorite($paris);
$mike->favorite($nantes);

echo $paris->get_name() . ' a ' . $paris->get_nbrFan() . ' fans. <br>';
echo $nantes->get_name() . ' a ' . $nantes->get_nbrFan() . ' fans. <br>';

$ligua = new League('ligua');
$ligua->add_team($paris);
$ligua->add_team($nantes);
echo 'Il y a ' . $ligua->get_teamCount() . ' équipe(s) dans la '
. $ligua->get_name() . '<br>';
