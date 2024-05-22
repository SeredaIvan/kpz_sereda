<?php

namespace ClassLib;

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
            echo "Оплачено " . $this->Connect()."<br>";
            return;
        } else {
            echo "Мало коштів для оплати <br>";
        }
    }
    public function __toString():string
    {
        return "Domestic Subscription";
    }
    /**
     * @param mixed $price
     * @return DomesticSubscription
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getChannels()
    {
        return $this->channels;
    }

    /**
     * @param mixed $channels
     */
    public function setChannels($channels)
    {
        $this->channels = $channels;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getFilmsCategories()
    {
        return $this->filmsCategories;
    }

    /**
     * @param mixed $filmsCategories
     */
    public function setFilmsCategories($filmsCategories)
    {
        $this->filmsCategories = $filmsCategories;
    }

    /**
     * @return mixed
     */
    public function getMultfilmsCategories()
    {
        return $this->multfilmsCategories;
    }

    /**
     * @param mixed $multfilmsCategories
     */
    public function setMultfilmsCategories($multfilmsCategories)
    {
        $this->multfilmsCategories = $multfilmsCategories;
    }
}
?>
