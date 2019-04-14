<?php
namespace structural\adapter\samples\sample2;

use structural\adapter\objects\Twitter;
use structural\adapter\samples\sample2\SocialAccountInterface;

class TwitterAdapter implements SocialAccountInterface
{
    /**
     * @var Twitter
     */
    private $twitter;

    public function __construct(string $user_name)
    {
        $this->twitter  = new Twitter($user_name);
    }

    public function share(string $text): bool
    {
        $this->twitter->tweet($text);

        return true;
    }
}
