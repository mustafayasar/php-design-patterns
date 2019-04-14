<?php

namespace structural\adapter\objects;

class Facebook
{
    /**
     * @var string
     */
    private $user_name;

    public function __construct(string $user_name)
    {
        $this->user_name    = $user_name;
    }

    public function shareThis(string $message): string
    {
        return $this->user_name.' tweets; '.$message;
    }

    public function sendMessage(string $to, string $message): string
    {
        return $this->user_name.' send a message to '.$to.'; '.$message;
    }
}