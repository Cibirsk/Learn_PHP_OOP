<?php

use Acme\League;
use Acme\Person;
use Acme\Teams\Team;

$aubagne = new Team('Aubagne');
$berg = new Team('Berg');

$bob = new Person('Bob');
$mike = new Person('Mike');
$bob->favorite($aubagne);
$mike->favorite($aubagne);
$mike->favorite($berg);

echo $aubagne->get_name() . ' a ' . $aubagne->get_nbrFan() . ' fans. <br>';
echo $berg->get_name() . ' a ' . $berg->get_nbrFan() . ' fans. <br>';

$ligua = new Acme\League('ligua');
$ligua->add_team($aubagne);
$ligua->add_team($berg);
echo 'Il y a ' . $ligua->get_teamCount() . ' équipe(s) dans la '
. $ligua->get_name() . '<br>';
