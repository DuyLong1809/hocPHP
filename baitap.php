<?php
class Number{

    private $number1 = 70;
    private $number2 = 70;
    private $kq;
    public function __construct()
    {
        $this->kq = $this->number1 + $this->number2;
    }


    //get dùng để lấy dữ liệu ở các thuộc tính không cho phép truy cập
    public function __get($name)
    {
        return $this->$name;
    }

//    set dùng để gán dữ liệu ở các thuộc tính không cho phép truy cập
    public function __set($name, $value)
    {
        return $this -> $name = $value;

    }


}