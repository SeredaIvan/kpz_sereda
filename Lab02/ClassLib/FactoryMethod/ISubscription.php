<?php

namespace ClassLib\FactoryMethod;

interface ISubscription
{
    public function Pay($cost);
    public function Connect():string;
    public function __toString():string;
}