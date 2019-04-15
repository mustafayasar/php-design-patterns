<?php
namespace structural\bridge;

abstract class Service
{
    /**
     * @var RendererInterface
     */
    protected $implementation;

    protected $subject;

    protected $content;

    public function __construct(RendererInterface $renderer)
    {
        $this->implementation   = $renderer;
    }
}