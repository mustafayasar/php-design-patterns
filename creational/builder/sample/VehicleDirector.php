<?php
namespace Creational\Builder\Sample;

use Creational\Builder\Objects\Vehicle;

class VehicleDirector
{
    public function build(BuilderInterface $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addWheels();

        return $builder->getVehicle();
    }
}