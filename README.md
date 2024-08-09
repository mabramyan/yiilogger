<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 логгер</h1>
    <br>
</p>


REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 7.4.



~~~
composer install
~~~

Run application

~~~
php yii serve

Open http://localhost:8080/ in your browser
~~~



Логгер реализован как компонент.
Конфигурация компонента находится в файле config/web.php

~~~

...
    'logger' => [
        'class' => Logger::class,
        'type' => env('LOGGER_TYPE', 'file'), //possible values file|email|db
        'email' => env('LOGGER_EMAIL', ''),
        'filePath' => env('LOGGER_FILE', '@runtime/logs/app.log'),
    ],
...
~~~

Используются так же переменные окружения находящиеся в .env файле

~~~
LOGGER_TYPE=file
LOGGER_EMAIL=test@test.com
LOGGER_FILE=some_file
~~~


## Компонент реализован в паппке

~~~
components/logger
~~~

