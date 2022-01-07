<?php

class Person
{
    public $firstName;
    public $lastName;
    public $age;

    public function __construct($firstName,$lastName,$age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }
}

$honore = new Person('Honore','Balzac',34);
$bob = new Person('Bob','l\'éponge',45);

echo $honore->firstName . '<br>';
echo $honore->lastName . '<br>';
echo $honore->age . '<br>';
echo $bob->firstName . '<br>';
echo $bob->lastName . '<br>';
echo $bob->age . '<br>';

?>