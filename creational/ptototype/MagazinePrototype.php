<?php
namespace Creational\Prototype;


class MagazinePrototype extends ItemPrototype
{
    protected $type = 'magazine';

    public function __clone()
    {

    }
}