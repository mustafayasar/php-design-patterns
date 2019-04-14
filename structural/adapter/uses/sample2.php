<?php
include(dirname(__FILE__).'/../../../vendor/autoload.php');

use structural\adapter\objects\Facebook;
use structural\adapter\objects\Twitter;
use structural\adapter\samples\sample2\SocialAccountInterface ;
use structural\adapter\samples\sample2\TwitterAdapter;
use structural\adapter\samples\sample2\FacebookAdapter;

function shareSomething(string $account, string $text): bool
{
    if ($account == 'facebook') {
        $account = new FacebookAdapter('imustafayasar');
    } elseif ($account == 'twitter') {
        $account = new TwitterAdapter('MustafaYasar');
    } else {
        return false;
    }

    return $account->share($text);
}

var_dump(shareSomething('facebook', 'Hello World!'));
var_dump(shareSomething('twitter', 'Hello World!'));