<?php

require 'autoload.php';

use ClassLib\FactoryMethod\ManagerCall;
use ClassLib\FactoryMethod\MobileApp;
use ClassLib\FactoryMethod\SubscriptionsEnum;
use ClassLib\FactoryMethod\User;
use ClassLib\FactoryMethod\WebSite;

$web = new WebSite();
$manager = new ManagerCall();
$mobile = new MobileApp();

$user1 = new User($web->AddSubscription(SubscriptionsEnum::DomesticSubscription));
$user2 = new User($manager->AddSubscription(SubscriptionsEnum::EducationalSubscription));
$user3 = new User($mobile->AddSubscription(SubscriptionsEnum::PremiumSubscription));

echo "<br>";

$user1->UserPay(200);
$user2->UserPay(300);
$user3->UserPay(500);

echo "<br>";

$user1->WhithSubscriptionSelected("user1");
echo "<br>";
$user2->WhithSubscriptionSelected("user2");
echo "<br>";
$user3->WhithSubscriptionSelected("user3");
echo "<br>";

echo "<a href='AbstractFactory.php'>AbstractFactory</a>";
