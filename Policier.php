<?php

class Policier extends Person
{
    private $grade;

    public function __construct($firstName,$lastName,$age,$grade)
    {
       parent::__construct($firstName,$lastName,$age);
       $this->grade = $grade;
    }

    public function fullname()
    {
        return parent::fullname() . ' policier, ' . $this->grade;
    }
}