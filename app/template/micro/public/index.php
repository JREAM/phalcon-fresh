<?php

$app = new Phalcon\Mvc\Micro();

// Home Page
$app->get('/', function () {
    echo "<h1>Home Page</h1>";
});

// Not Found
$app->notFound(function () use ($app) {
    $app->response->setStatusCode(404, "Not Found")->sendHeaders();
    echo 'Page not found!';
});

$app->handle();