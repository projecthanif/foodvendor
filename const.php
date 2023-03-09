<?php

class Car{
    public $carName;
    function __construct($brand){
        $this->carName=$brand;
    }
}

class Company extends Car{
    public $engine;
    function __construct($brand,$type){
        $this->engine=$type;
        parent::__construct($brand);
    }
    function getter(){
        return array($this->engine,$this->carName);
    }
}
$result=new Company('Venza','Automatic');

$print=$result->getter()[1];

try {
 if($print==0)
    throw new Exception("Error Processing Request", 1);
    else
    echo $print;
} catch (\Throwable $th) {
   echo $th->getMessage();
}



?>
