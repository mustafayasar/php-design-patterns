<?php
namespace structural\adapter\samples\sample1;

use structural\adapter\objects\Twitter;

class TwitterAdapter
{
    /**
     * @var Twitter
     */
    private $twitter;

    public function __construct(Twitter $twitter)
    {
        $this->twitter  = $twitter;
    }

    public function shareThis(string $message): string
    {
        return $this->twitter->tweet($message);
    }

    public function sendMessage(string $to, string $message): string
    {
        return $this->twitter->dm($to, $message);
    }
}
