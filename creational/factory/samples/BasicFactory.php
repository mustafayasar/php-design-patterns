<?php
namespace Creational\Factory\Samples;

use Creational\Factory\Objects\Motor;

class BasicFactory
{
    public function createMotor(): Motor
    {
        return new Motor(50);
    }
}