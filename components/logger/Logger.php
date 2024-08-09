<?php

namespace  app\components\logger;

use app\components\logger\interfaces\LogWriter;

use app\components\logger\interfaces\LoggerInterface;


/**
 * This is the Logger component class".
 *
 * @property string $type
 *
 */



class Logger  implements LoggerInterface
{
    public $username;
    public $type;
    public $email;
    public $filePath;



    /** 
     * Sends message to current logger.
     *
     * @param string $message
     *
     * @return void
     */
    public function send(string $message): void
    {

        $logger = LoggerFactory::getInstance($this->type, $this->getConfig());
        $logger->send($message);
    }

    /**
     * Sends message by selected logger.
     *
     * @param string $message
     * @param string $loggerType
     *
     * @return void
     */
    public function sendByLogger(string $message, string $loggerType): void
    {
        $logger = LoggerFactory::getInstance($loggerType, $this->getConfig());
        $logger->send($message);
    }

    /**
     * Gets current logger type.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Sets current logger type.
     *
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * Gets  logger config.
     *
     * @return array
     */


    private function getConfig()
    {
        return (array)$this;
    }
}
