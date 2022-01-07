<?php

class Person
{
    public $firstName;
    public $lastName;
    public $age;

    public function __construct($firstName)
    {
        $this->firstName = $firstName;
    }
}

$honore = new Person('Honore');
$bob = new Person('Bob');
echo $honore->firstName . '<br>';
echo $bob->firstName . '<br>';

?>