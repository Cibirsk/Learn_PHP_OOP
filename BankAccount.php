<?php

class BankAccount
{
    public $accountNumber;
    public $balance = 0;

    public function __construct($accountNumber)
    {
       $this->accountNumber = $accountNumber; 
    }
}

$compteBancaireDeHonore = new BankAccount('1234567');

echo 'n° de compte: ' . $compteBancaireDeHonore->accountNumber . '<br>';
$compteBancaireDeHonore->balance = 5000;
echo 'balance: ' . $compteBancaireDeHonore->balance . '<br>';

?>