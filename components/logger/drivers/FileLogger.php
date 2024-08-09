<?php
namespace app\components\logger\drivers;

use app\components\logger\interfaces\LogWriter;

/** 
 * This is the Logger driver class to send logs on file. Example: "SEND MESSAGE: " . $message . 'to file logger" .
 * 
 * @property string $filePath
 */

class FileLogger implements LogWriter
{
    private $filePath;
    public function __construct($config)
    {
        $this->filePath = $config['filePath'];
    }

    public function send(string $message):void
    {
        echo "SEND MESSAGE: " . $message . ' TO FILE "'.$this->filePath.'" ';

    }

}