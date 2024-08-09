<?php
namespace app\components\logger\drivers;

use app\components\logger\interfaces\LogWriter;

/**
 * This is the Logger driver class to send logs on email. Example: "SEND MESSAGE: " . $message . 'to email logger" .
 *
 * @property string $email
 *
 */
class EmailLogger implements LogWriter
{
    private $email;
    public function __construct($config)
    {
        $this->email = $config['email'];
    }
    public function send(string $message): void
    {
       echo "SEND MESSAGE: " . $message . 'TO EMAIL "'.$this->email.'"';
    }
}