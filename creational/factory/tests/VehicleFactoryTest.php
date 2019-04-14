<?php
namespace Creational\Factory\Tests;

include(dirname(__FILE__).'/../../../vendor/autoload.php');

use Creational\Factory\Objects\Bicycle;
use Creational\Factory\Objects\Car;
use Creational\Factory\Objects\Motor;
use Creational\Factory\Samples\BasicFactory;
use Creational\Factory\Samples\StaticFactory;
use Creational\Factory\Samples\VehicleFactory;
use PHPUnit\Framework\TestCase;

class VehicleFactoryTest extends TestCase
{
    public function testCreateAllVehicle()
    {
        $vehicleFactory = new VehicleFactory();

        $this->assertInstanceOf(Car::class, $vehicleFactory->createCar(4,2500));

        $this->assertInstanceOf(Motor::class, $vehicleFactory->createMotor(1000));

        $this->assertInstanceOf(Bicycle::class, $vehicleFactory->createBicycle(500));
    }
}