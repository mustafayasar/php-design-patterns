<?php
namespace Creational\Builder\Sample;

use Creational\Builder\Objects\Vehicle;

interface BuilderInterface
{
    public function createVehicle();

    public function getVehicle(): Vehicle;

    public function addWheels(): void ;

    public function addDoors(): void ;
}
