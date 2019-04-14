<?php
namespace Creational\Builder\Sample;

use Creational\Builder\Objects\Truck;
use Creational\Builder\Objects\Vehicle;

class TruckBuilder implements BuilderInterface
{
    /**
     * @var Truck
     */
    private $truck;

    public function createVehicle()
    {
        $this->truck    = new Truck();
    }

    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }

    public function addWheels(): void
    {
        $this->truck->addPart('wheel1');
        $this->truck->addPart('wheel2');
        $this->truck->addPart('wheel3');
        $this->truck->addPart('wheel4');
        $this->truck->addPart('wheel5');
        $this->truck->addPart('wheel6');
    }

    public function addDoors(): void
    {
        $this->truck->addPart('door1');
        $this->truck->addPart('door2');
    }
}