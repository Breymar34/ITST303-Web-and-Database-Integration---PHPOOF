<?php

class MyClass {
    public $publicVar = "Public variable";
    protected $protectedVar = "Protected variable";
    private $privateVar = "Private variable";
    
    public function getProtectedVar() {
        return $this->protectedVar;
    }
    
    public function getPrivateVar() {
        return $this->privateVar;
    }
}

$obj = new MyClass();

// Accessing public variable
echo "Public variable: " . $obj->publicVar . "<br>";

// Trying to access protected and private variables directly will result in an error
// echo "Protected variable: " . $obj->protectedVar . "<br>"; // Error
// echo "Private variable: " . $obj->privateVar . "<br>"; // Error

// Accessing protected variable through a method
echo "Protected variable: " . $obj->getProtectedVar() . "<br>";

// Accessing private variable through a method
echo "Private variable: " . $obj->getPrivateVar() . "<br>";

?>
