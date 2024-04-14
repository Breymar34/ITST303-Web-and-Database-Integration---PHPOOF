<?php

// Abstract class defining a shape
abstract class Shape {
    // Abstract method for calculating area
    abstract public function calculateArea();
}

// Concrete class implementing Shape for a rectangle
class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Implementing the abstract method to calculate area
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Create a rectangle object
$rectangle = new Rectangle(5, 10);

// Call the method to calculate area
echo "Area of rectangle: " . $rectangle->calculateArea();
?>
