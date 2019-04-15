<?php
namespace Structural\Facade;

class Facebook
{
    public function share($status, $url = null): void
    {
        echo $status.' shared ';

        if ($url != null) {
            echo 'with this url: '.$url;
        }

        echo ". \n";
    }
}