<?php
namespace Structural\DependencyInjection;

class FileLog implements LogInterface
{

    public function connect(): bool
    {
        // connecting file system

        return true;
    }

    public function add(string $level, string $message): void
    {
        // adding log
    }
}