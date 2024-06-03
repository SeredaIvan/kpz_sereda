<?php

namespace ClassLib\AbstractFactory\Classes;

use ClassLib\AbstractFactory\Interfaces\IEBook;

include_once (__DIR__."/../../Interfaces/IEBook.php");
class BalaxyEBook implements IEBook
{
    #[\Override] public function getSpecs(): string
    {
        return "BalaxyEBook created";
    }
}