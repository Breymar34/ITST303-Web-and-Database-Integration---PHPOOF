<?php
class X{
    private $greet ="Hello World";
    
    public function __construct(){
       echo $this->greet;
    }
}

$obj = new X();
