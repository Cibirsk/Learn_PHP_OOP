<?php
namespace Acme;

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