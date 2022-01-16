<?php

class A 
{
    private static $attribut1 = 9;

    public function methode1()
    {
        echo self::$attribut1;
    }
}

class B extends A 
{
    public function methode1()
    {
        parent::methode1();
    }
}

(new B)->methode1();