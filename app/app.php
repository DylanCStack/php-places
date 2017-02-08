<?php
    require_once __DIR__ . '/../vendor/autoload.php';
    require_once __DIR__ . '/../src/Place.php';

    $app = new Silex\Application();

    $app->get('/', function() {
        return 'Sample root page';
    });

    return $app;
?>
