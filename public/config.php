<?php

use Stripe\Stripe;

require_once('vendor/autoload.php');

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$stripe = array(
    'secret_key' => $_ENV['SECRET'],
    'publishable_key' => $_ENV['PUBLISHABLE']
);
Stripe::setApiKey($stripe['secret_key']);

//Here I can configure other variables I need
$_ENV['SomeVariable'] = "SomeValue";
$_SERVER['SomeServerVariable'] = "SomeServerValue";
