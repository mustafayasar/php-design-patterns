<?php
namespace Structural\Decorator;

interface OrderInterface
{
    public function getCost(): int;

    public function getOrderDescription(): string;
}

