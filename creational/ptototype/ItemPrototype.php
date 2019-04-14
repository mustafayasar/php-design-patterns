<?php
namespace Creational\Prototype;


abstract class ItemPrototype
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $category;

    /**
     * @var string
     */
    protected $type;

    abstract public function __clone();

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory(string $category): void
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

}