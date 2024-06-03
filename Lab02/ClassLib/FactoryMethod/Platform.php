<?php

namespace ClassLib\FactoryMethod;

abstract class Platform
{
    abstract public function AddSubscription(SubscriptionsEnum $subscription): ISubscription;
}


