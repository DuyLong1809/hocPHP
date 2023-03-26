<?php
class long{

    protected function GetName(){
        return $this->name;
    }

    public function FullName(){
        return $this->GetName();
    }
}

class duy{

    public function AAA(){
        return $this -> GetName();
    }
}
