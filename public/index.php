<?php
    require __DIR__.'/../vendor/autoload.php';
    $test = new App\Mysql\TestPDO();
    $test->getUser();