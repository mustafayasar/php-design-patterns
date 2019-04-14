<?php

namespace Creational\Factory\Objects;

use Creational\Factory\Objects\Vehicle;


class Car extends Vehicle
{
    public function GetMaxSpeed(): int
    {
        return 240;
    }
}