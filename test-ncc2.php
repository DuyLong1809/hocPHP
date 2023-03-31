<?php
class Name{
    private $firstname = "duy";


    public function FullName()
    {
        return $this->firstname = "long";
    }
    public function __isset($name)
    {
        return "k dc phep truy cap" . $name;
    }
}