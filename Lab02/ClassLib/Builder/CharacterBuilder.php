<?php

namespace ClassLib\Builder;

interface CharacterBuilder
{
    public function setHeight($height);
    public function setBuild($build);
    public function setHairColor($color);
    public function setEyeColor($color);
    public function setClothes($clothes);
    public function setInventory($inventory);
    public function buildCharacter($data);
}