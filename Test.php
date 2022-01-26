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

(new A)->toto(5);