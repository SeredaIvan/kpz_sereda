<?php

namespace ClassLib;

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

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
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
    public function setChannels($channels): void
    {
        $this->channels = $channels;
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
    public function setFilmsCategories($filmsCategories): void
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
    public function setMultfilmsCategories($multfilmsCategories): void
    {
        $this->multfilmsCategories = $multfilmsCategories;
    }

    /**
     * @return mixed
     */
    public function getAudiobooks()
    {
        return $this->audiobooks;
    }

    /**
     * @param mixed $audiobooks
     */
    public function setAudiobooks($audiobooks): void
    {
        $this->audiobooks = $audiobooks;
    }
}