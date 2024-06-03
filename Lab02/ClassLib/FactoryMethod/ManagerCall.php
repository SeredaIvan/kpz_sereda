<?php

namespace ClassLib\FactoryMethod;



class ManagerCall extends Platform
{
    public function AddSubscription(SubscriptionsEnum $subscription):ISubscription
    {
        echo "Менеджер підключив тариф <br>";
        return SubscriptionCreator::CreateSubscription($subscription);
    }
}