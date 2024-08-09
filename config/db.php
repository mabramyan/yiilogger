<?php

$_fn=realpath(__DIR__."/../data")."/data.db";
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'sqlite:'.$_fn,
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',

    // Schema cache options (for production environment)
    //'enableSchemaCache' => true,
    //'schemaCacheDuration' => 60,
    //'schemaCache' => 'cache',
];
