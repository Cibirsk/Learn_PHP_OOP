<?php

class BankAccount
{
    public $accountNumber;
    private $balance = 0;

    public function __construct($accountNumber)
    {
       $this->accountNumber = $accountNumber; 
    }

    public function setBalance($balance)
    {
        if($balance<10000){
            throw new Exception("pas assez d'argent");
            
        }
        $this->balance = $balance;
    }

    public function getBalance()
    {
        return $this->balance;
    }
}

$compteBancaireDeHonore = new BankAccount('1234567');

echo 'n° de compte: ' . $compteBancaireDeHonore->accountNumber . '<br>';

$compteBancaireDeHonore->setBalance(12000);

echo 'balance: ' . $compteBancaireDeHonore->getBalance() . '<br>';


?>