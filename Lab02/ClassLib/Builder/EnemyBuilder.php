<?php

namespace ClassLib\Builder;

use ClassLib\Builder\CharacterBuilder;

include_once (__DIR__ . '/CharacterBuilder.php');
include_once (__DIR__ . '/Character.php');
class EnemyBuilder implements CharacterBuilder
{
    private $height;
    private $build;
    private $hairColor;
    private $eyeColor;
    private $clothes;
    private $inventory;

    public function setHeight($height) {
        $this->height = $height;
        return $this;
    }

    public function setBuild($build) {
        $this->build = $build;
        return $this;
    }

    public function setHairColor($color) {
        $this->hairColor = $color;
        return $this;
    }

    public function setEyeColor($color) {
        $this->eyeColor = $color;
        return $this;
    }

    public function setClothes($clothes) {
        $this->clothes = $clothes;
        return $this;
    }

    public function setInventory($inventory) {
        $this->inventory = $inventory;
        return $this;
    }

    public function buildCharacter($data) {
        $this->setHeight($data['height']);
        $this->setBuild($data['build']);
        $this->setHairColor($data['hairColor']);
        $this->setEyeColor($data['eyeColor']);
        $this->setClothes($data['clothes']);
        $this->setInventory($data['inventory']);
        return new Character($this->height, $this->build, $this->hairColor, $this->eyeColor, $this->clothes, $this->inventory);
    }
}