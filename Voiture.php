<?php


class Voiture
{
    public $marque;
    public $couleur;

    public function demarrer()
    {
        echo "Vroom <br>";
    }

    public function arreter()
    {
        echo "stop <br>";
    }

    public function klaxonner()
    {
        echo "Driiing <br>";
    }

    private function relierFilBleuFilRouge()
    {

    }
}