<?php

namespace ClassLib\AbstractFactory\Classes;


use ClassLib\AbstractFactory\Interfaces\INotebook;

include_once (__DIR__."/../../Interfaces/INotebook.php");

class IProneNotebook implements INotebook
{

    #[\Override] public function getSpecs(): string
    {
        return "IProneNotebook created";
    }
}