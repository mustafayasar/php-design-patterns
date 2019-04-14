<?php

namespace Creational\Factory\Objects;

use Creational\Factory\Objects\Vehicle;


class Motor extends Vehicle
{
    public function __construct(int $price)
    {
        parent::__construct(0, $price);
    }

    public function GetMaxSpeed(): int
    {
        return 120;
    }
}