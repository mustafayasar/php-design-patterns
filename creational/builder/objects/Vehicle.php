<?php
namespace Creational\Builder\Objects;

abstract class Vehicle
{
    /**
     * @var array[]
     */
    private $parts = [];

    public function addPart($name)
    {
        $this->parts[]  = $name;
    }
}