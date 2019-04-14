<?php
namespace Structural\DependencyInjection;

interface LogInterface
{
    public function connect(): bool;
    public function add(string $level, string $message): void;
}