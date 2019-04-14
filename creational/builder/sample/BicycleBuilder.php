<?php
namespace Creational\Builder\Sample;

use Creational\Builder\Objects\Bicycle;
use Creational\Builder\Objects\Car;
use Creational\Builder\Objects\Truck;
use Creational\Builder\Objects\Vehicle;

class BicycleBuilder implements BuilderInterface
{
    /**
     * @var Bicycle
     */
    private $bicycle;

    public function createVehicle()
    {
        $this->bicycle  = new Bicycle();
    }

    public function getVehicle(): Vehicle
    {
        return $this->bicycle;
    }

    public function addWheels(): void
    {
        $this->bicycle->addPart('wheel1');
        $this->bicycle->addPart('wheel2');
    }

    public function addDoors(): void
    {
        // There are no doors.
    }
}