<?php
namespace structural\bridge;

class HtmlRenderer implements RendererInterface
{

    public function view(string $subject, string $content): string
    {
        return sprintf("<h1>%s</h1><p>%s</p>", $subject, $content);
    }
}
