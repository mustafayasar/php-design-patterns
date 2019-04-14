<?php
include(dirname(__FILE__).'/../../vendor/autoload.php');

use Creational\Singleton\Session;

$session_1    = Session::getInstance();
$session_2    = Session::getInstance();
$session_3    = Session::getInstance();


echo $session_1->getKey()."\n";
echo $session_2->getKey()."\n";
echo $session_3->getKey()."\n";