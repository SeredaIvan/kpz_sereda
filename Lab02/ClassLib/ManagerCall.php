<?php

namespace ClassLib;


use SubscriptionsEnum;

class ManagerCall extends Platform
{
    public function AddSubsrciption(SubscriptionsEnum $subscription)
    {
        echo "Менеджер підключив тариф ";
        SubscriptionCreator::CreateSubscription($subscription);
    }
}