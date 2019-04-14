<?php
namespace Creational\Builder\Test;

include(dirname(__FILE__).'/../../../vendor/autoload.php');


use Creational\Builder\Objects\Bicycle;
use Creational\Builder\Objects\Car;
use Creational\Builder\Objects\Truck;
use Creational\Builder\Sample\BicycleBuilder;
use Creational\Builder\Sample\CarBuilder;
use Creational\Builder\Sample\TruckBuilder;
use Creational\Builder\Sample\VehicleDirector;
use PHPUnit\Framework\TestCase;


class SampleTest extends TestCase
{
    public function testBuildBicycle()
    {
        $bicycle    = (new VehicleDirector())->build(new BicycleBuilder());

        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }

    public function testBuildCar()
    {
        $car        = (new VehicleDirector())->build(new CarBuilder());

        $this->assertInstanceOf(Car::class, $car);
    }

    public function testBuildTruck()
    {
        $truck      = (new VehicleDirector())->build(new TruckBuilder());

        $this->assertInstanceOf(Truck::class, $truck);
    }
}