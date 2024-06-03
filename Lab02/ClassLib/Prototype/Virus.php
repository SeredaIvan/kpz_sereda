<?php
namespace ClassLib\Prototype;

class Virus {
    private $weight;
    private $age;
    private $name;
    private $type;
    private $children = [];

    public function __construct($weight, $age, $name, $type) {
        $this->weight = $weight;
        $this->age = $age;
        $this->name = $name;
        $this->type = $type;
    }

    public function addChild(Virus $child) {
        $this->children[] = $child;
    }

    public function getChildren() {
        return $this->children;
    }

    public function __clone() {
        $this->children = array_map(function($child) {
            return clone $child;
        }, $this->children);
    }

    public function __toString() {
        return "Virus: $this->name, Type: $this->type, Weight: $this->weight, Age: $this->age";
    }
}