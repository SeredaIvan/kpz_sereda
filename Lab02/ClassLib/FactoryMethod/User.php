<?php

namespace ClassLib\FactoryMethod;

class User
{
    public ISubscription $selectedSubscription;
    public string $sub;
    public function __construct(ISubscription $selectedSubscription)
    {
        $this->selectedSubscription = $selectedSubscription;
        $this->sub = $selectedSubscription->__toString();
    }
    public function WhithSubscriptionSelected($user)
    {
        echo "Користувач ".$user. " вибрав ".$this->sub;
    }
    public function UserPay(int $cost)
    {
        $this->selectedSubscription->Pay($cost);
    }
}