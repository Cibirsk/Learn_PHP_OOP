<?php


class Cercle extends Forme
{
    private $rayon = 5;

    public function aire()
    {
        return $this->rayon * $this->rayon * 3.14;
    }
}