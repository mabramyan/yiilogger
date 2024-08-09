<?php
namespace app\components\logger\interfaces;

interface LogWriter
{
    public function send(string $message): void;
}