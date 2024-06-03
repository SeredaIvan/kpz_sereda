<?php

namespace ClassLib\FactoryMethod;

class SubscriptionCreator
{
    private function __construct()
    {
    }

    public static function CreateSubscription(SubscriptionsEnum $subscriptionsEnum): ?ISubscription
    {
        switch ($subscriptionsEnum) {
            case SubscriptionsEnum::DomesticSubscription:
                return new DomesticSubscription();
            case SubscriptionsEnum::EducationalSubscription:
                return new EducationalSubscription();
            case SubscriptionsEnum::PremiumSubscription:
                return new PremiumSubscription();
            default:
                return null;
        }
    }
}
