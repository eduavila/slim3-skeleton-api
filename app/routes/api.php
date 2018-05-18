<?php
//
$app->get('/','App\Controller\DemoController:index')->setName('index');

$app->get('/auth','App\Controller\DemoController:auth')->setName('auth');