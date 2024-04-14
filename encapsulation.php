<?php
class Car {
    private $model;

    public function setModel($model) {
        $this->model = $model;
    }

    public function getModel() {
        return $this->model;
    }
}

// Create a new Car object
$car = new Car();

// Set the model using the setter method
$car->setModel("Toyota");

// Get the model using the getter method
echo "The car model is: " . $car->getModel();
?>
