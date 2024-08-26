<?php

abstract class Shape {
    protected $name;

    abstract public function calculateArea();

    public function __construct($name) {
        $this->name = $name;
    }

    // Concrete method
    public function getName() {
        return $this->name;
    }
}


class Circle extends Shape {
    private $radius;

    public function __construct($name, $radius) {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}

echo '<div>';

$circle = new Circle('Circle', 5);
var_dump(($circle));


echo '<br />';



class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($name, $width, $height) {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}

$rectangle = new Rectangle('Rectangle', 5, 10);
var_dump($rectangle);

echo '</div>';
