<?php

include __DIR__ . '/../../vendor/autoload.php';

Dotenv::load(__DIR__ . '/../../');

defined('APP_PATH') || define('APP_PATH', realpath('.'));

return new \Phalcon\Config(array(
    'database' => [
        'adapter'     => 'Mysql',
        'host'        => getenv('DBHOST'),
        'username'    => getenv('DBUSERNAME'),
        'password'    => getenv('DBPASSWORD'),
        'dbname'      => getenv('DBNAME'),
        'charset'     => getenv('CHARSET'),
    ],

    'application' => [
        'controllersDir' => APP_PATH . '/app/controllers/',
        'modelsDir'      => APP_PATH . '/app/models/',
        'migrationsDir'  => APP_PATH . '/app/migrations/',
        'viewsDir'       => APP_PATH . '/app/views/',
        'pluginsDir'     => APP_PATH . '/app/plugins/',
        'libraryDir'     => APP_PATH . '/app/library/',
        'cacheDir'       => APP_PATH . '/app/cache/',
        'baseUri'        => '/',
        'dev'            => true,
    ],
    
    'namespace' => [
    'controllers' => 'App\Controllers',
    'models' => 'App\Models',
    ]
));
