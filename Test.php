<?php

require 'vendor/autoload.php';
use Acme\League;
use Acme\Person;
use Acme\Team;

$paris = new Team('Paris');
$nantes = new Team('Nantes');

$bob = new Person('Bob');
$mike = new Person('Mike');
$bob->favorite($paris);
$mike->favorite($paris);
$mike->favorite($nantes);

echo $paris->get_name() . ' a ' . $paris->get_nbrFan() . ' fans. <br>';
echo $nantes->get_name() . ' a ' . $nantes->get_nbrFan() . ' fans. <br>';

$ligua = new Acme\League('ligua');
$ligua->add_team($paris);
$ligua->add_team($nantes);
echo 'Il y a ' . $ligua->get_teamCount() . ' équipe(s) dans la '
. $ligua->get_name() . '<br>';
