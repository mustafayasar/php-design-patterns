<?php
namespace Structural\DependencyInjection;

class DBLog implements LogInterface
{

    public function connect(): bool
    {
        // connecting DB

        return true;
    }

    public function add(string $level, string $message): void
    {
        // adding log
    }
}