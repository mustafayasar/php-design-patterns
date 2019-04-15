<?php
include(dirname(__FILE__).'/../../vendor/autoload.php');

use Structural\Decorator\PizzaOrder;
use Structural\Decorator\ExtraSalami;
use Structural\Decorator\ExtraCheese;

$order  = new PizzaOrder();
$order  = new ExtraSalami($order);

echo $order->getOrderDescription()."\n";
echo $order->getCost()."$ \n";


echo "\n\n";


$order  = new PizzaOrder();
$order  = new ExtraCheese($order);
$order  = new ExtraSalami($order);

echo $order->getOrderDescription()."\n";
echo $order->getCost()."$ \n";