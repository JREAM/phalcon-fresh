<?php

use Phalcon\DI\FactoryDefault\CLI;

// Everything is relative to the app folder.
$dir = chdir(dirname(__DIR__));
define('APP_PATH', __DIR__);

// Loader
$loader = new \Phalcon\Loader();
$loader->registerDirs(['app/tasks/'])
       ->register();

/**
 * Depdency Injection
 */
$di = new Phalcon\DI();

// Router
$di->setShared('router', function() {
    return new Phalcon\CLI\Router();
});

// Dispatcher
$di->setShared('dispatcher', function() {
    return new Phalcon\CLI\Dispatcher();
});


// Config
$di->setShared('config', function() {
    require 'config/config.php';
    return $config;
});

/**
 * Run application
 */
$console = new Phalcon\CLI\Console();
$console->setDI($di);
 /**
 * Process the console arguments
 */
 $arguments = [];
 foreach($argv as $k => $arg)
 {
     if ($k == 1)
     {
         $arguments['task'] = $arg;
     }
     elseif($k == 2)
     {
         $arguments['action'] = $arg;
     }
     elseif($k >= 3)
     {
        $arguments['params'][] = $arg;
     }
 }

// Define Global Constants for the Current Task & Action
define('CURRENT_TASK', (isset($argv[1]) ? $argv[1] : null));
define('CURRENT_ACTION', (isset($argv[2]) ? $argv[2] : null));

 try {
     // Handles Incoming Arguments
     $console->handle($arguments);
 }
 catch (\Phalcon\Exception $e) {
     echo "\nError: " . $e->getMessage() . "\n";
     exit(255);
 }