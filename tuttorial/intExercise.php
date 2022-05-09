<?php
interface Phone{
    public function makeCall($number);
    public function sendMessage($number, $message);
}

class iOS implements Phone{
    public $number;
    public $message;
    public function makeCall($number){
    $this->number = $number;
    echo "Dear Customer you have called $this->number times <br>";
    }
    public function sendMessage($number, $message){
        $this->number = $number;
        $this->message = $message;

        echo "You have successfully sent the following message: \"$this->message\" $this->number times so far";
    }
}


$phone1 = new iOS();
$phone1->makeCall(5);
$phone1->sendMessage(5 , "Damn PHP is awesome as hell");
?>