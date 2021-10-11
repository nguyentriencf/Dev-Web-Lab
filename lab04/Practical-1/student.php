<?php
class students{
    public $firstName;
    public $lastName;
    public $address;
    function __construct($firstName, $lastName, $address)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
    }
    public function geeting()
    {
        return 'hello '. $this->firstName. "\n";
    }
    public function getAdress(){
        return 'adress is '. $this->address;
    }
}
?>