<?php

namespace ClassLib\AbstractFactory\Classes;

use ClassLib\AbstractFactory\Interfaces\ILaptop;

include_once (__DIR__."/../../Interfaces/ILaptop.php");
class KiaomiLaptop implements ILaptop
{

    #[\Override] public function getSpecs(): string
    {
        return "KiaomiLaptop created";
    }
}