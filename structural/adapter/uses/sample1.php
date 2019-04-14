<?php
include(dirname(__FILE__).'/../../../vendor/autoload.php');

use structural\adapter\objects\Facebook;
use structural\adapter\objects\Twitter;
use structural\adapter\samples\sample1\TwitterAdapter;

$facebook = new Facebook('imustafayasar');
$twitter = new TwitterAdapter(new Twitter('MustafaYasar'));

$facebook->shareThis('Hello World!');
$twitter->shareThis('Hello World!');

$facebook->sendMessage('zack', 'Hi Dude!');
$twitter->sendMessage('jack', 'Hi Dude!');