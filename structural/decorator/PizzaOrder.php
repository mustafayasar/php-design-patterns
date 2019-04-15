<?php
namespace Structural\Decorator;

class PizzaOrder implements OrderInterface
{
    public function getCost(): int
    {
        return 35;
    }

    public function getOrderDescription(): string
    {
        return 'Pizza';
    }
}