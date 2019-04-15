<?php
namespace Structural\Facade;

class Pinterest
{
    public function pin($url): void
    {
        echo $url." pinned. \n";
    }
}