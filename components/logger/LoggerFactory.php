<?php

namespace app\components\logger;

use app\components\logger\drivers\DbLogger;
use app\components\logger\drivers\EmailLogger;
use app\components\logger\drivers\FileLogger;
use app\components\logger\interfaces\LogWriter;

class LoggerFactory
{
    /**
     * Gets  logger type.
     *
     * @return LogWriter
     */
    public static function getInstance(string $type = '', array $config = []): LogWriter
    {            

        // we can use here static variable to make singleton pattern

        switch ($type) {
            case 'file':
                return new FileLogger($config);
            case 'db':
                return new DbLogger($config);
            case 'email':
                return new EmailLogger($config);
            default:
                return new FileLogger($config);
        }
    }
}
