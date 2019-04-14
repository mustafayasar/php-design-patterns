<?php
namespace Creational\Singleton;

final class Session
{
    /**
     * @var Session
     */
    private static $instance;

    /**
     * @var int
     */
    private $key;

    public static function getInstance(): Session
    {
        if (null == static::$instance) {
            static::$instance   = new Session();
        }

        return static::$instance;
    }

    public function getKey(): int
    {
        return $this->key;
    }

    /**
     * __construct'ı private veya protected yaparak, dışarıdan new ile oluşturulmasını engelliyoruz.
     */
    private function __construct()
    {
        $this->key = rand(100000,999999);
    }

    /**
     * Dışarıdan kopyalanmasını/tekrardan oluşturulmasını engellemek için bu metodları private veya protected yapıyoruz.
     */
    private function __clone()
    {
    }
    private function __wakeup()
    {
    }
}

