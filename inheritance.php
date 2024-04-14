<?php

// Parent class
class Animal {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function speak() {
        return "Animal sound";
    }
}

// Child class inheriting from Animal
class Dog extends Animal {
    public function speak() {
        return "Woof!";
    }
}

// Creating instances
$animal = new Animal("Generic Animal");
$dog = new Dog("Buddy");

// Output
echo $animal->getName() . " says: " . $animal->speak() . "\n";
echo $dog->getName() . " says: " . $dog->speak() . "\n";

?>
