<?php

class BankAccount
{
    public $accountNumber;

    public function __construct($accountNumber)
    {
       $this->accountNumber = $accountNumber; 
    }
}

$compteBancaireDeHonore = new BankAccount('1234567');

echo $compteBancaireDeHonore->accountNumber . '<br>';


?>