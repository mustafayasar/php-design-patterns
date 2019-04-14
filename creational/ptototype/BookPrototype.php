<?php
namespace Creational\Prototype;


class BookPrototype extends ItemPrototype
{
    protected $type = 'book';

    public function __clone()
    {

    }
}