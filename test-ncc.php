<?php
class people{

    private $human;

    public function __isset($name)
    {
        echo "kiem tra .$name";
        return isset($this->$name);
    }
}
$p = new people();
if(isset($p->human)){
    echo "co ton tai";
}else{
    echo "khong ton tai";
}

if(isset($p->aaa)){
    echo "co ton tai";
}else{
    echo "khong ton tai";
}
