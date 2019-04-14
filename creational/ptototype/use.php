<?php
include(dirname(__FILE__).'/../../vendor/autoload.php');

use Creational\Prototype\BookPrototype;
use Creational\Prototype\MagazinePrototype;

$bookPrototype      = new BookPrototype();
$bookPrototype->setCategory('novel');

$items  = [];

for ($i = 1; $i <= 5; $i++) {
    $book = clone $bookPrototype;
    $book->setName('Novel ' . $i);

    $items[]    = $book;
}

$magazinePrototype  = new MagazinePrototype();
$magazinePrototype->setCategory('sport');

for ($i = 1; $i <= 3; $i++) {
    $magazine   = clone $magazinePrototype;
    $magazine->setName('Sport Magazine ' . $i);

    $items[]    = $magazine;
}

foreach ($items as $item) {
    echo 'type: '.$item->getType().' -- category: '.$item->getCategory().' -- name: '.$item->getName()."\n";
}