<?php

namespace ClassLib\AbstractFactory\Classes;


use ClassLib\AbstractFactory\Interfaces\INotebook;

include_once (__DIR__."/../../Interfaces/INotebook.php");

class KiaomiNotebook implements INotebook
{

    #[\Override] public function getSpecs(): string
    {
        return "KiaomiNotebook created";
    }
}