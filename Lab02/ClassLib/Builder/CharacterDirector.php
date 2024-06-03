<?php

namespace ClassLib\Builder;

include_once (__DIR__ . '/CharacterBuilder.php');

class CharacterDirector
{
    private $builder;

    public function __construct(CharacterBuilder $builder) {
        $this->builder = $builder;
    }

    public function buildCharacter($data) {
        return $this->builder->buildCharacter($data);
    }
}