<?php

namespace ClassLib\AbstractFactory\Factory;

use ClassLib\AbstractFactory\Classes\IProneEBook;
use ClassLib\AbstractFactory\Classes\IProneLaptop;
use ClassLib\AbstractFactory\Classes\IProneNotebook;
use ClassLib\AbstractFactory\Classes\IProneSmartPhone;
use ClassLib\AbstractFactory\Interfaces\IEBook;
use ClassLib\AbstractFactory\Interfaces\IFactory;
use ClassLib\AbstractFactory\Interfaces\ILaptop;
use ClassLib\AbstractFactory\Interfaces\INotebook;
use ClassLib\AbstractFactory\Interfaces\ISmartPhone;

include_once (__DIR__."/../Brand/IProneSmartPhone.php");
include_once (__DIR__."/../Brand/IProneLaptop.php");
include_once (__DIR__."/../Brand/IProneNotebook.php");
include_once (__DIR__."/../Brand/IProneEBook.php");
include_once (__DIR__."/../../Interfaces/IFactory.php");

class IProneFactory implements IFactory
{

    #[\Override] public function createSmartphone(): ISmartPhone
    {
        return new IProneSmartPhone();
    }

    #[\Override] public function createLaptop(): ILaptop
    {
        return new IProneLaptop();
    }

    #[\Override] public function createEBook(): IEBook
    {
        return new IProneEBook();
    }

    #[\Override] public function createNotebook(): INotebook
    {
        return new IProneNotebook();
    }
}