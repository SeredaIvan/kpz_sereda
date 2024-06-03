<?php

namespace ClassLib\AbstractFactory\Classes;

use ClassLib\AbstractFactory\Interfaces\ILaptop;

include_once (__DIR__."/../../Interfaces/ILaptop.php");
class IProneLaptop implements ILaptop
{

    #[\Override] public function getSpecs(): string
    {
        return "IProneLaptop created";
    }
}