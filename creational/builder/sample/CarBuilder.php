<?php
namespace Creational\Builder\Sample;

use Creational\Builder\Objects\Car;
use Creational\Builder\Objects\Truck;
use Creational\Builder\Objects\Vehicle;

class CarBuilder implements BuilderInterface
{
    /**
     * @var Car
     */
    private $car;

    public function createVehicle()
    {
        $this->car    = new Car();
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }

    public function addWheels(): void
    {
        $this->car->addPart('wheel1');
        $this->car->addPart('wheel2');
        $this->car->addPart('wheel3');
        $this->car->addPart('wheel4');
    }

    public function addDoors(): void
    {
        $this->car->addPart('door1');
        $this->car->addPart('door2');
        $this->car->addPart('door3');
        $this->car->addPart('door4');
    }
}