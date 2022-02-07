<?php

require 'vendor/autoload.php';

$paris = new Acme\Team('Paris');
$nantes = new Acme\Team('Nantes');

$bob = new Acme\Personne('Bob');
$mike = new Acme\Personne('Mike');
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
