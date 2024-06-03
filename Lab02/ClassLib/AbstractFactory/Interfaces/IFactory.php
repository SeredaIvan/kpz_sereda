<?php

namespace ClassLib\AbstractFactory\Interfaces;

interface IFactory
{
    public function createSmartphone():ISmartPhone;
    public function createLaptop():ILaptop;
    public function createEBook():IEBook;
    public function createNotebook():INotebook;
}