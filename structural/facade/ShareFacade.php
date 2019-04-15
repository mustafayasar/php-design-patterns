<?php
namespace Structural\Facade;

class ShareFacade
{
    protected $facebook;
    protected $twitter;
    protected $pinterest;

    public function __construct(Facebook $facebook, Twitter $twitter, Pinterest $pinterest)
    {
        $this->facebook     = $facebook;
        $this->twitter      = $twitter;
        $this->pinterest    = $pinterest;
    }

    public function share($text, $url)
    {
        $this->facebook->share($text, $url);
        $this->twitter->tweet($text.' '.$url);
        $this->pinterest->pin($url);
    }
}