<?php
namespace Structural\Decorator;

class ExtraCheese extends OrderDecorator
{
    public function getCost(): int
    {
        return $this->order->getCost() + 10;
    }

    public function getOrderDescription(): string
    {
        return $this->order->getOrderDescription().' and extra cheese';
    }
}