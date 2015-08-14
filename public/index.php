<?php

error_reporting(E_ALL);

define('APP_PATH', realpath('..'));
use RuntimeException as Exception;
use Phalcon\Logger\Adapter\File as FileAdapter;
try {

    /**
     * Read the configuration
     */
    $config = include APP_PATH . "/app/config/config.php";
    $debug = new \Phalcon\Debug();
    $debug->listen();
    
    
    /**
     * Read auto-loader
     */
    include APP_PATH . "/app/config/loader.php";

    /**
     * Read services
     */
    include APP_PATH . "/app/config/services.php";

    /**
     * Handle the request
     */
    $application = new \Phalcon\Mvc\Application($di);

    echo $application->handle()->getContent();

} catch (Exception $e) {

    $logger = new FileAdapter("../app/logs/Deb.log");
    $logger->log($e->getMessage());

}
