<?php
namespace structural\bridge;

class TextRenderer implements RendererInterface
{

    public function view(string $subject, string $content): string
    {
        return $subject." \n \n ".$content;
    }
}
