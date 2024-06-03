<?php

namespace ClassLib\AbstractFactory\Factory;

use ClassLib\AbstractFactory\Classes\BalaxySmartPhone;
use ClassLib\AbstractFactory\Classes\BalaxyNotebook;
use ClassLib\AbstractFactory\Classes\BalaxyLaptop;
use ClassLib\AbstractFactory\Classes\BalaxyEBook;

use ClassLib\AbstractFactory\Interfaces\IEBook;
use ClassLib\AbstractFactory\Interfaces\IFactory;
use ClassLib\AbstractFactory\Interfaces\ILaptop;
use ClassLib\AbstractFactory\Interfaces\INotebook;
use ClassLib\AbstractFactory\Interfaces\ISmartPhone;

include_once (__DIR__."/../Brand/BalaxyEBook.php");
include_once (__DIR__."/../Brand/BalaxySmartPhone.php");
include_once (__DIR__."/../Brand/BalaxyLaptop.php");
include_once (__DIR__."/../Brand/BalaxyNotebook.php");
include_once (__DIR__."/../../Interfaces/IFactory.php");

class BalaxyFactory implements IFactory
{

    #[\Override] public function createSmartphone(): ISmartPhone
    {
        return new BalaxySmartPhone();
    }

    #[\Override] public function createLaptop(): ILaptop
    {
        return new BalaxyLaptop();
    }

    #[\Override] public function createEBook(): IEBook
    {
        return new BalaxyEBook();
    }

    #[\Override] public function createNotebook(): INotebook
    {
        return new BalaxyNotebook();
    }
}