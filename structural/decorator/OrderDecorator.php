<?php
namespace Structural\Decorator;

abstract class OrderDecorator implements OrderInterface
{
    protected $order;

    public function __construct(OrderInterface $order)
    {
        $this->order    = $order;
    }
}