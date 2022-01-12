<?php

class Triangle extends Forme
{
    private $base = 4;
    private $hauteur = 3;

    public function aireTriangle()
    {
        return ($this->base * $this->hauteur)/2;
    }
}

