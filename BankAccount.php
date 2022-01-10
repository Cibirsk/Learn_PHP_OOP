<?php

class BankAccount
{
    const TAX = 0.8;
    public $accountNumber;
    public $accountOwner;
    private $balance = 0;
    private static $totalCount = 0;

    public function __construct($accountNumber,$accountOwner)
    {
       $this->accountNumber = $accountNumber; 
       $this->accountOwner = $accountOwner;
       static::$totalCount++;
    }

    public static function getTotalCount()
    {
        return static::$totalCount;
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

$compteBancaireDeHonore = new BankAccount('1234567','Honore');
$compteBancaireDeBob = new BankAccount('7654321','Bob');

echo 'le compte n° : ' . $compteBancaireDeHonore->accountNumber . ' appartient à ' . 
    $compteBancaireDeHonore->accountOwner . '<br>';

$compteBancaireDeHonore->setBalance(12000);

echo 'balance: ' . $compteBancaireDeHonore->getBalance() . '<br>';

echo BankAccount::getTotalCount() . '<br>';

echo BankAccount::TAX;
?>