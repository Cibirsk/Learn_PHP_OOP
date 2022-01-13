<?php

class A 
{
    public function toto()
    {
        echo 'methode toto appelé depuis class A <br>';
    }
}

class B extends A
{
    public function tata()
    {
        parent::toto();
        echo 'methode tata appelé depuis class B <br>';
    }
}

(new b)->tata();

