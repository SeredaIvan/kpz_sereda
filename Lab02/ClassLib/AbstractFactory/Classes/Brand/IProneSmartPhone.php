<?php

namespace ClassLib\AbstractFactory\Classes;

use ClassLib\AbstractFactory\Interfaces\ISmartPhone;

include_once (__DIR__."/../../Interfaces/ISmartPhone.php");

class IProneSmartPhone implements ISmartPhone
{

    #[\Override] public function getSpecs(): string
    {
        return "IProneSmartPhone created";
    }
}