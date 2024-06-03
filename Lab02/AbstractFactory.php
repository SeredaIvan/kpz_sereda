<?php

use ClassLib\AbstractFactory\Factory\IProneFactory;
use ClassLib\AbstractFactory\Factory\KiaomiFactory;
use ClassLib\AbstractFactory\Factory\BalaxyFactory;
include_once ('ClassLib\AbstractFactory\Classes\Factory\IProneFactory.php');
include_once ('ClassLib\AbstractFactory\Classes\Factory\KiaomiFactory.php');
include_once ('ClassLib\AbstractFactory\Classes\Factory\BalaxyFactory.php');

//$factory = new IProneFactory();
//$factory = new KiaomiFactory();
$factory = new BalaxyFactory();

$laptop = $factory->createLaptop();
echo $laptop->getSpecs() . "\n";
echo"<br>";
$netbook = $factory->createNotebook();
echo $netbook->getSpecs() . "\n";
echo"<br>";
$ebook = $factory->createEBook();
echo $ebook->getSpecs() . "\n";
echo"<br>";
$smartphone = $factory->createSmartphone();
echo $smartphone->getSpecs() . "\n";