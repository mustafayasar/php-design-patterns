<?php
namespace Creational\Factory\Objects;

/**
 * Interface Vehicle
 *
 * @package CreationalFactory\AbstractFactory
 */
abstract class Vehicle
{
    /**
     * @var string
     */
    protected $numberOfDoors;
    /**
     * @var integer
     */
    protected $price;

    public function __construct(int $numberOfDoors, int $price)
    {
        $this->numberOfDoors    = $numberOfDoors;
        $this->price            = $price;
    }

    public function getNumberOfDoors(): int
    {
        return $this->numberOfDoors;
    }

    public function getPrice(): int
    {
        return $this->price;
    }

    abstract public function GetMaxSpeed(): int;
}