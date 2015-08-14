<?php

$loader = new \Phalcon\Loader();

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerNamespaces(
    array(
        $config->namespace->controllers => $config->application->controllersDir,
        $config->namespace->models => $config->application->modelsDir
    )
)->register();
