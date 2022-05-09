<?php

class bank {

    public $account;
    public $name;
    public $balance;

    function __construct($account, $name)
    {
        $this->name = $name;
        $this->account = $account;
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
    function CheckBalance(){
        echo "Your Account Balance is $this->balance <br>";
        return $this;
    }
}


$user1 = new Bank(123456, "Irakarama Laurent");
$user1->balance = 1000678;
$deposit = $user1->DepositAmount(400000)->CheckBalance();;
$deduct = $user1->DeductAmount(345467)->CheckBalance();

// $user1->amount1;
// $user1->amount2;

// echo "$user1->name with account number $user1->account has the following balance $balance frw <br>";
// echo "$user1->name has deposited and now has $deposit frw <br>";
// echo "$user1->name has withdrawn and now has $deduct frw";