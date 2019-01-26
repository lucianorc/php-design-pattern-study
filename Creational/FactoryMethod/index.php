<?php

require_once('Notifier.php');
require_once('NotifierFactory.php');
require_once('ElectronicNotifierFactory.php');
require_once('CourierNotifierFactory.php');

require_once('SMS.php');
$mobile = ElectronicNotifierFactory::getNotifier('SMS', '07111111111');
echo $mobile->sendNotification();

require_once('Email.php');
$email = ElectronicNotifierFactory::getNotifier('Email', 'email@example.com');
echo $email->sendNotification();

require_once('Post.php');
$post = CourierNotifierFactory::getNotifier('Post', 'Av. A, São Luís');
echo $post->sendNotification();
