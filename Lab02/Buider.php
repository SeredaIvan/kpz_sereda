<?php

use ClassLib\Builder\CharacterDirector;
use ClassLib\Builder\EnemyBuilder;
use ClassLib\Builder\HeroBuilder;

include_once ('ClassLib\Builder\HeroBuilder.php');
include_once ('ClassLib\Builder\EnemyBuilder.php');
include_once ('ClassLib\Builder\CharacterDirector.php');

$heroBuilder = new HeroBuilder();
$director = new CharacterDirector($heroBuilder);
$hero = $director->buildCharacter([
    'height' => 180,
    'build' => 'muscular',
    'hairColor' => 'brown',
    'eyeColor' => 'blue',
    'clothes' => 'armor',
    'inventory' => ['sword', 'shield']
]);

$enemyBuilder = new EnemyBuilder();
$director = new CharacterDirector($enemyBuilder);
$enemy = $director->buildCharacter([
    'height' => 170,
    'build' => 'slender',
    'hairColor' => 'black',
    'eyeColor' => 'red',
    'clothes' => 'robes',
    'inventory' => ['magic staff', 'potion']
]);


echo "Hero: " . $hero . "<br>";
echo "Enemy: " . $enemy . "<br>";