<?php
namespace app\components\logger\drivers;

use app\components\logger\interfaces\LogWriter;

class DbLogger implements LogWriter
{
    private $table = 'logs';

    public function send(string $message): void
    {
        echo "SEND MESSAGE: " . $message . 'TO TABLE "'.$this->table.'"';
    }
}