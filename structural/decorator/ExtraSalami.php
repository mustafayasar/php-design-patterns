<?php
namespace Structural\Decorator;

class ExtraSalami extends OrderDecorator
{
    public function getCost(): int
    {
        return $this->order->getCost() + 15;
    }

    public function getOrderDescription(): string
    {
        return $this->order->getOrderDescription().' and extra salami';
    }
}