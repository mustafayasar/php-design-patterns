<?php
namespace Structural\DependencyInjection;

class LogService
{
    /**
     * @var LogInterface
     */
    private $logSystem;

    public function __construct(LogInterface $logSystem)
    {
        $this->logSystem    = $logSystem;
    }

    public function addError(string $message): void
    {
        $this->logSystem->add('error', $message);
    }
    public function addWarning(string $message): void
    {
        $this->logSystem->add('warning', $message);
    }
    public function addNotice(string $message): void
    {
        $this->logSystem->add('notice', $message);
    }
}