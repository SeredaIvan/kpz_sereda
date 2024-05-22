<?php

namespace ClassLib;



use SubscriptionsEnum;

class WebSite extends Platform
{
    public function AddSubsrciption(SubscriptionsEnum $subscription){
        echo "Користувач WebSite підключив тариф ";
        SubscriptionCreator::CreateSubscription($subscription);
    }
}