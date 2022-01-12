<?php


class Cercle extends Forme
{
    private $rayon = 5;

    public function aireCercle()
    {
        return $this->rayon * $this->rayon * 3.14;
    }
}