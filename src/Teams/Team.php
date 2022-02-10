<?php
namespace Acme\Teams;


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

    public function favorite()
    {
        $this->nbrFan++;
    }
}