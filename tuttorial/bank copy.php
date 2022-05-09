<?php

class Bank {

    public $account;
    public $name;
    private $balance;

    function __construct($balance)
    {
        $this->balance = $balance;
    }

    function DepositAmount($amount) {
        $this->balance = $this->balance + $amount;
        return $this;
    }
    function DeductAmount($amount) {
        if ($this->balance <= 0 ){
            echo "No balance in your Account";
            // return $this;
        }elseif($this->balance <= $amount){
            echo "Requested Amount is greater than Balance <br>";
            // return;
        }
        $this->balance = $this->balance;
        return $this;
    }
    // function CheckBalance(){
    //     echo "Your Account Balance is $this->balance <br>";
    //     return $this;}
        function getBalance(){
        return $this->balance;
    }
}


$user1 = new Bank(123456);
echo $user1->getBalance().PHP_EOL;
echo "<br>";
$user1->DepositAmount(3456);
echo $user1->getBalance().PHP_EOL;


// $user1->amount1;
// $user1->amount2;

// echo "$user1->name with account number $user1->account has the following balance $balance frw <br>";
// echo "$user1->name has deposited and now has $deposit frw <br>";
// echo "$user1->name has withdrawn and now has $deduct frw";