<?php
include(dirname(__FILE__).'/../../vendor/autoload.php');

use Structural\Facade\Facebook;
use Structural\Facade\Twitter;
use Structural\Facade\Pinterest;
use Structural\Facade\ShareFacade;

$facebook   = new Facebook();
$twitter    = new Twitter();
$pinterest  = new Pinterest();


$facade     = new ShareFacade($facebook, $twitter, $pinterest);

$facade->share('Müzik Dinle', 'https://www.muzikdinle.com.tr/');