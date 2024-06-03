<?php

namespace ClassLib\FactoryMethod;

class MobileApp extends Platform
{
    public function AddSubscription(SubscriptionsEnum $subscription):ISubscription
    {
        echo "Користувач телефону підключив тариф <br>";
        return SubscriptionCreator::CreateSubscription($subscription);
    }

}