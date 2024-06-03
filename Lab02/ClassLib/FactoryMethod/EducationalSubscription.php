<?php

namespace ClassLib\FactoryMethod;

class EducationalSubscription implements ISubscription
{
    private $isPayed=false;
    private $price;
    private $channels=[];
    private $filmsCategories=[];
    private $audiobooks;
    #[\Override] public function Connect(): string
    {
        return "Підключено навчальну підписку ";
    }
    #[\Override] public function Pay($cost){
        if ($cost >=$this->price){
            $this->isPayed=true;
            echo "Оплачено " . $this->Connect()."<br>";
            return;
        }
        echo "Мало коштів для оплати ";
    }
    public function __construct()
    {
        $this->price=250;
        $this->channels=["Мега","National Geografic"];
        $this->filmsCategories=["Документальні","Фентезі"];
        $this->audiobooks="ALL";
    }
    public function __toString():string
    {
        return "Education Subscription";
    }
}