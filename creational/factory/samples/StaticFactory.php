<?php
namespace Creational\Factory\Samples;

use Creational\Factory\Objects\Bicycle;
use Creational\Factory\Objects\Car;
use Creational\Factory\Objects\Motor;
use Creational\Factory\Objects\Vehicle;

class StaticFactory
{
    public static function create(string $which): Vehicle
    {
        if ($which == 'car') {
            return new Car(4, 6000);
        } elseif ($which == 'motor') {
            return new Motor(1000);
        } elseif ($which == 'bicycle') {
            return new Bicycle(200);
        }

        throw new \InvalidArgumentException('Unknown vehicle given');
    }
}