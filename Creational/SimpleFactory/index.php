<?php

require_once('Notifier.php');
require_once('NotifierFactory.php');

require_once('SMS.php');
require_once('Email.php');

$mobile = NotifierFactory::getNotifier("SMS", "07111111111");
echo $mobile->sendNotification();

echo '<br/>';

$email = NotifierFactory::getNotifier("Email", "email@example.com");
echo $email->sendNotification();