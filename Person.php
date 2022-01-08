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

    public function fullname()
    {
        return $this->firstName . ' ' . $this->lastName . ' a ' . $this->age . ' ans ';
    }

    public function bouger($action)
    {
        return  "et est en train de " . $action . '.';
    }
}

$honore = new Person('Honore','Balzac',34);
$bob = new Person('Bob','l\'éponge',45);


$actionHonore = $honore->bouger('sauter');
$actionBob = $bob->bouger('danser');
$fullNameHonore = $honore->fullname();
$fullNameBob = $bob->fullname();

echo $fullNameHonore . $actionHonore . '<br>';
echo $fullNameBob . $actionBob . '<br>';

?>