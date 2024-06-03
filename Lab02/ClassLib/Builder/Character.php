<?php

namespace ClassLib\Builder;

class Character
{
    private $height;
    private $build;
    private $hairColor;
    private $eyeColor;
    private $clothes;
    private $inventory;

    public function __construct($height, $build, $hairColor, $eyeColor, $clothes, $inventory) {
        $this->height = $height;
        $this->build = $build;
        $this->hairColor = $hairColor;
        $this->eyeColor = $eyeColor;
        $this->clothes = $clothes;
        $this->inventory = $inventory;
    }

    public function __toString() {
        return "Height: {$this->height}, Build: {$this->build}, Hair Color: {$this->hairColor}, Eye Color: {$this->eyeColor}, Clothes: {$this->clothes}, Inventory: " . implode(", ", $this->inventory);
    }
}