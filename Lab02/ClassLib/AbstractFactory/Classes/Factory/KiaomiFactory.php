<?php

namespace ClassLib\AbstractFactory\Factory;

use ClassLib\AbstractFactory\Classes\KiaomiEBook;
use ClassLib\AbstractFactory\Classes\KiaomiLaptop;
use ClassLib\AbstractFactory\Classes\KiaomiNotebook;
use ClassLib\AbstractFactory\Classes\KiaomiSmartPhone;

use ClassLib\AbstractFactory\Interfaces\IEBook;
use ClassLib\AbstractFactory\Interfaces\IFactory;
use ClassLib\AbstractFactory\Interfaces\ILaptop;
use ClassLib\AbstractFactory\Interfaces\INotebook;
use ClassLib\AbstractFactory\Interfaces\ISmartPhone;

include_once (__DIR__."/../Brand/KiaomiEBook.php");
include_once (__DIR__."/../Brand/KiaomiLaptop.php");
include_once (__DIR__."/../Brand/KiaomiNotebook.php");
include_once (__DIR__."/../Brand/KiaomiSmartPhone.php");
include_once (__DIR__."/../../Interfaces/IFactory.php");

class KiaomiFactory implements IFactory
{

    #[\Override] public function createSmartphone(): ISmartPhone
    {
        return new KiaomiSmartPhone();
    }

    #[\Override] public function createLaptop(): ILaptop
    {
        return new KiaomiLaptop();
    }

    #[\Override] public function createEBook(): IEBook
    {
        return new KiaomiEBook();
    }

    #[\Override] public function createNotebook(): INotebook
    {
        return new KiaomiNotebook();
    }
}