<?php


class Cercle extends Forme
{
    private $rayon;

    public function __construct($rayon)
    {
       $this->rayon = $rayon; 
    }
    
    public function aire()
    {
        return $this->rayon * $this->rayon * 3.14;
    }
}