<?php

use ClassLib\Singleton\Authenticator;

include_once ('ClassLib\Singleton\Authenticator.php');

echo "<br><p>Singleton</p><br>";

$auth1 = Authenticator::getInstance();
$auth1->login();

$auth2 = Authenticator::getInstance();
echo "Is user logged in: " . ($auth2->isLoggedIn() ? "Yes" : "No");

$auth2->logout();
echo "<br>Is user logged in: " . ($auth1->isLoggedIn() ? "Yes" : "No");
