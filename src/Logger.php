<?php
namespace Src;

class Logger
{
    private static $instance;
    private $log;

    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }

    protected function __construct()
    {
        $this->log = array();
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }

    public function logEvent($description)
    {
        $logLine = '[' . date('d.m.Y H:i') . '] ' . $description;
        $this->log[] = $logLine;
        file_put_contents( __DIR__ . "/../log.txt", $logLine, FILE_APPEND);
    }

}