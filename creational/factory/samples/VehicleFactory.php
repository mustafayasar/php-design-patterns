<?php
namespace Creational\Factory\Samples;

use Creational\Factory\Objects\Bicycle;
use Creational\Factory\Objects\Car;
use Creational\Factory\Objects\Motor;

class VehicleFactory
{
    public function createCar(int $numberOfDoors, int $price): Car
    {
        return new Car($numberOfDoors, $price);
    }

    public function createMotor(int $price): Motor
    {
        return new Motor($price);
    }

    public function createBicycle(int $price): Bicycle
    {
        return new Bicycle($price);
    }
}