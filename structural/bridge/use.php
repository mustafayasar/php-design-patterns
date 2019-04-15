<?php
include(dirname(__FILE__).'/../../vendor/autoload.php');

use structural\bridge\RendererService;
use structural\bridge\TextRenderer;
use structural\bridge\HtmlRenderer;

$items  = [
    new RendererService('Başlık 1', 'İçerik 1', new TextRenderer()),
    new RendererService('Başlık 2', 'İçerik 2', new HtmlRenderer())
];


foreach ($items as $item) {
    echo $item->get();

    echo "\n\n";
}