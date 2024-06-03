<?php

namespace ClassLib\FactoryMethod;


class WebSite extends Platform
{
    public function AddSubscription(SubscriptionsEnum $subscription):ISubscription{
        echo "Користувач WebSite підключив тариф <br>";
        return SubscriptionCreator::CreateSubscription($subscription);
    }
}