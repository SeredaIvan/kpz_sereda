<?php
function autoload($className)
{
$file = str_replace('\\', '/', $className) . '.php';
if (file_exists($file)) {
include_once($file);
} else {
echo "File not found: $file";
}
}


spl_autoload_register('autoload');


use ClassLib\SubscriptionCreator;
use ClassLib\ISubscription;
use ClassLib\ManagerCall;
use ClassLib\WebSite;
use ClassLib\MobileApp;
use ClassLib\EducationalSubscription;
use ClassLib\PremiumSubscription;
use ClassLib\DomesticSubscription;
use ClassLib\SubscriptionsEnum;
use ClassLib\User;

$user1 = new User(SubscriptionCreator::createSubscription(SubscriptionsEnum::DomesticSubscription));
$user2 = new User(SubscriptionCreator::createSubscription(SubscriptionsEnum::EducationalSubscription));
$user3 = new User(SubscriptionCreator::createSubscription(SubscriptionsEnum::PremiumSubscription));

$user1->UserPay(200);
$user2->UserPay(300);
$user3->UserPay(500);

$user1->WhithSubscriptionSelected("user1");
echo"<br>";
$user2->WhithSubscriptionSelected("user2");
echo"<br>";
$user3->WhithSubscriptionSelected("user3");
echo"<br>";