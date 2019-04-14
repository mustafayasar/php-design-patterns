<?php

namespace structural\adapter\objects;

use phpDocumentor\Reflection\Types\Array_;

class Twitter
{
    /**
     * @var string
     */
    private $user_name;

    public function __construct(string $user_name)
    {
        $this->user_name    = $user_name;
    }

    public function tweet(string $tweet): string
    {
        return $this->user_name.' says; '.$tweet;
    }

    public function dm(string $to, string $message): string
    {
        return $this->user_name.' send a direct message to '.$to.'; '.$message;
    }
}