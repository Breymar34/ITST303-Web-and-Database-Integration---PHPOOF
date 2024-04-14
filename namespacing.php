<?php

namespace MyNamespace;

class MyClass {
    public function sayHello() {
        echo "Hello from MyClass!";
    }
}

namespace AnotherNamespace;

class AnotherClass {
    public function sayHello() {
        echo "Hello from AnotherClass!";
    }
}

// Usage
$myObject = new MyNamespace\MyClass();
$myObject->sayHello();

$anotherObject = new AnotherNamespace\AnotherClass();
$anotherObject->sayHello();
?>
