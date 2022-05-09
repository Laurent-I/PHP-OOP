<?php
class University{
    public $universityName;
    public $universityAddress;
    public $licenseNo;

    function __construct($universityName, $universityAddress, $licenseNo)
    {
        $this->universityName = $universityName;
        $this->universityAddress = $universityAddress;
        $this->licenseNo = $licenseNo;

    }
    function printUniDetails(){
        echo "University Name: $this->universityName". PHP_EOL;
echo "<br>";
        echo "University Address: $this->universityAddress". PHP_EOL;
echo "<br>";
        echo "License No: $this->licenseNo", PHP_EOL;
echo "<br>";
    }
}

?>