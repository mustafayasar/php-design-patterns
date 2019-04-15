<?php
namespace structural\bridge;

class RendererService extends Service
{
    public function __construct(string $subject, string $content, RendererInterface $renderer) {
        parent::__construct($renderer);

        $this->subject = $subject;
        $this->content = $content;
    }

    public function get(): string
    {
        return $this->implementation->view($this->subject, $this->content);
    }
}