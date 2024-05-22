<?php

namespace ClassLib;

use SubscriptionsEnum;

abstract class Platform
{
    abstract public function AddSubsrciption(SubscriptionsEnum $subscription);
}