<?php
namespace structural\bridge;

interface RendererInterface
{
    public function view(string $subject, string $content): string;
}