<?php
// Person Class
class Person {
    public $firstName;
    public $lastName;
    private $age;

    public function __construct($firstName, $lastName, $age) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getFullName() {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }
}

// Instance of Person Class
$person = new Person("John", "Doe", 25);
echo "Full Name: " . $person->getFullName() . "\n";
echo "Age: " . $person->getAge() . "\n";

// Updated Age
$person->setAge(26);
echo "Updated Age: " . $person->getAge() . "\n";

// Car Class
class Car {
    public $make;
    public $model;
    protected $year;

    public function __construct($make, $model, $year) {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getCarInfo() {
        return $this->model . ' ' . $this->make . ' (' . $this->year . ')';
    }
}

// Instance of Car Class
$car = new Car("Camry", "Toyota", 2020);
echo "Car Info: " . $car->getCarInfo() . "\n";
?>