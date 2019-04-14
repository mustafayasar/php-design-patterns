<?php
namespace Creational\Factory\Tests;

include(dirname(__FILE__).'/../../../vendor/autoload.php');

use Creational\Factory\Objects\Motor;
use Creational\Factory\Samples\BasicFactory;
use PHPUnit\Framework\TestCase;

class BasicFactoryTest extends TestCase
{
    public function testCreateMotor()
    {
        $motor  = (new BasicFactory())->createMotor();
        $this->assertInstanceOf(Motor::class, $motor);
    }
}