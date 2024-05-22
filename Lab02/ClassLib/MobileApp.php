<?php

namespace ClassLib;


use SubscriptionsEnum;

class MobileApp extends Platform
{
    public function AddSubsrciption(SubscriptionsEnum $subscription)
    {
        echo "Користувач телефону підключив тариф ";
        SubscriptionCreator::CreateSubscription($subscription);
    }

}