<?php

namespace ClassLib\FactoryMethod;

class PremiumSubscription implements ISubscription
{
    private $isPayed=false;
    private $price;
    private $channels = [];
    private $filmsCategories = [];
    private $multfilmsCategories = [];
    private $audiobooks = [];
    #[\Override] public function Connect(): string
    {
        return "Підключено преміальну підписку ";
    }
    #[\Override] public function Pay($cost){
        if ($cost >=$this->price){
            $this->isPayed=true;
            echo "Оплачено " . $this->Connect()."<br>";
            return;
        }
        echo "Мало коштів для оплати";
    }
    public function __construct()
    {
        $this->price=500;
        $this->channels="ALL";
        $this->filmsCategories="ALL";
        $this->multfilmsCategories="ALL";
        $this->audiobooks="ALL";
    }
    public function __toString():string
    {
        return "Premium Subscription";
    }

}