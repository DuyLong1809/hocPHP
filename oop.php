<?php
abstract class people {

    abstract function man();

}

Trait GetName {
    public $firstName;
    public $lastName;
}

class Name extends people{

    use GetName;
    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function man(){

        echo "ten toi la:".$this->firstName." ".$this->lastName;

    }
}

$p = new Name("Dinh Duy", "long");
$p -> man();