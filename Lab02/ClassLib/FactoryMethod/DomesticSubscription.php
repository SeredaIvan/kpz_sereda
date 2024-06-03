<?php

namespace ClassLib\FactoryMethod;

class DomesticSubscription implements ISubscription
{
    private $isPayed = false;
    private $price;
    private $channels = [];
    private $filmsCategories = [];
    private $multfilmsCategories = [];

    public function __construct()
    {
        $this->price = 200;
        $this->channels = ["hahaTV", "ТЕТ", "Pixel", "1+1"];
        $this->filmsCategories = ["Комедії", "Жахи", "Серіали"];
        $this->multfilmsCategories = ['Повнометражні', 'Короткометражні', 'Серіали'];
    }

    public function Connect(): string
    {
        return "Підключено внутрішню підписку ";
    }

    public function Pay($cost)
    {
        if ($cost >= $this->price) {
            $this->isPayed = true;
            echo "Оплачено " . $this->Connect() . "<br>";
            return;
        } else {
            echo "Мало коштів для оплати <br>";
        }
    }

    public function __toString(): string
    {
        return "Domestic Subscription";
    }
}
?>
