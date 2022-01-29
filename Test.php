<?php

class Person
{
    private $name;

    public function __construct($name)
    {
       $this->name = $name; 
    }
}

class Team
{
    private $name;
    private $nbrFan = 0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function get_name()
    {
        return $this->name;
    }

    public function get_nbrFan()
    {
        return $this->nbrFan;
    }
}

class League
{
    private $name;
    private $team;

    public function __construct($name)
    {
        $this->name = $name;
        $this->team = [];
    }

    public function get_name()
    {
        return $this->name;
    }

    public function add_team(Team $team)
    {
        $this->team[] = $team;
    }

    public function get_teamCount()
    {
        return count($this->team);
    }
}

$paris = new Team('Paris');
echo $paris->get_name() . ' a ' . $paris->get_nbrFan() . ' fans. <br>';

$nantes = new Team('Nantes');
echo $nantes->get_name() . ' a ' . $nantes->get_nbrFan() . ' fans. <br>';

$ligua = new League('ligua');
$ligua->add_team($paris);
$ligua->add_team($nantes);
echo 'Il y a ' . $ligua->get_teamCount() . ' équipe(s) dans la ' . $ligua->get_name();