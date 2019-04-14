<?php
namespace Creational\Factory\Tests;

include(dirname(__FILE__).'/../../../vendor/autoload.php');

use Creational\Factory\Objects\Bicycle;
use Creational\Factory\Objects\Car;
use Creational\Factory\Objects\Motor;
use Creational\Factory\Samples\BasicFactory;
use Creational\Factory\Samples\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCreateCar()
    {
        $this->assertInstanceOf(Car::class, StaticFactory::create('car'));
    }

    public function testCreateMotor()
    {
        $this->assertInstanceOf(Motor::class, StaticFactory::create('motor'));
    }

    public function testCreateBicycle()
    {
        $this->assertInstanceOf(Bicycle::class, StaticFactory::create('bicycle'));
    }
}