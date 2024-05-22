<?php

namespace ClassLib;

class User
{
    public ISubscription $selectedSubscription;
    public string $sub;
    public function __construct(ISubscription $selectedSubscription)
    {
        $this->selectedSubscription = $selectedSubscription;
        $this->sub = $selectedSubscription->__toString();
    }

    /**
     * @return mixed
     */
    public function getSelectedSubscription():ISubscription
    {
        return $this->selectedSubscription;
    }

    /**
     * @param mixed $selectedSubscription
     */
    public function setSelectedSubscription(ISubscription $selectedSubscription): void
    {
        $this->selectedSubscription = $selectedSubscription;
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