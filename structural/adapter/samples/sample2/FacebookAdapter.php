<?php
namespace structural\adapter\samples\sample2;

use structural\adapter\objects\Facebook;

class FacebookAdapter implements SocialAccountInterface {
    /**
     * @var Facebook
     */
    private $facebook;

    public function __construct(string $user_name)
    {
        $this->facebook  = new Facebook($user_name);
    }

    public function share(string $text): bool
    {
        $this->facebook->shareThis($text);

        return true;
    }
}