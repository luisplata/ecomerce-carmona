<?php
/*
$root = __DIR__ . '';
$boot = __DIR__ . '/../vendor/autoload.php';
$app = __DIR__ . '/../bootstrap/app.php';

require $boot;
$app = require_once $app;
$app->make('Illuminate\Contracts\Http\Kernel')
    ->handle(Illuminate\Http\Request::capture());
//qui llegan todas las transacciones echas por PayU en metodo POST
//instancia del controlador
$test = new App\Http\Controllers\PayController();
//acesso a las funciones
$test->ConfirmationPayu($_POST);
*/

require __DIR__.'/../vendor/autoload.php';
$app = require_once __DIR__.'/../bootstrap/app.php';
$app->make('Illuminate\Contracts\Http\Kernel')
    ->handle(Illuminate\Http\Request::capture($_POST));
//qui llegan todas las transacciones echas por PayU en metodo POST
//instancia del controlador
$test = new App\Http\Controllers\PayController();
//acesso a las funciones
$test->ConfirmationPayu(Illuminate\Http\Request::capture($_POST));
