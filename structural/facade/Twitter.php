<?php
namespace Structural\Facade;

class Twitter
{
    public function tweet($tweet): void
    {
        echo $tweet." tweeted.\n";
    }
}