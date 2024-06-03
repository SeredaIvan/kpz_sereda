<?php

use ClassLib\Prototype\Virus;

include_once ('ClassLib\Prototype\Virus.php');

echo "<p>Prototype</p>";

$virus1 = new Virus(10, 1, "Virus1", "Type1");
$child1 = new Virus(5, 0.5, "Child1", "Type1");
$child2 = new Virus(6, 0.6, "Child2", "Type1");
$virus1->addChild($child1);
$virus1->addChild($child2);

$clonedVirus1 = clone $virus1;

echo "Original Virus 1: " . $virus1 . "<br>";
echo "Cloned Virus 1: " . $clonedVirus1 . "<br>";

echo "Children of Original Virus 1:<br>";
foreach ($virus1->getChildren() as $child) {
    echo $child . "<br>";
}

echo "Children of Cloned Virus 1:<br>";
foreach ($clonedVirus1->getChildren() as $child) {
    echo $child . "<br>";
}