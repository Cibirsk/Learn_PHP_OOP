<?php

class A 
{
    public function toto($x)
    {
        echo 'toto de A' . $x;
    }
}

class B 
{
    public function toto($x)
    {
        echo 'toto de B' . $x;
    }
}

class Team
{
    private $name;
    private $nbrFan;

    public function __construct($name,$nbrFan)
    {
        $this->name = $name;
        $this->nbrFan = $nbrFan;
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

    public function add_team($team)
    {
        $this->team[] = $team;
    }
}
