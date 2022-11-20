<?php
/** @var \Slim\App $app */

$app->get('/index', \WeimobCloudBootDemo\Controller\DemoController::class . ':index');
$app->post('/mysql', \WeimobCloudBootDemo\Controller\MysqlDemoController::class . ':mysql');
$app->post('/redis', \WeimobCloudBootDemo\Controller\RedisDemoController::class . ':redis');
$app->post('/httpPost', \WeimobCloudBootDemo\Controller\HttpDemoController::class . ':httpPost');
$app->post('/httpGet', \WeimobCloudBootDemo\Controller\HttpDemoController::class . ':httpGet');
$app->post('/log', \WeimobCloudBootDemo\Controller\LogDemoController::class . ':log');
$app->post('/getCCToken', \WeimobCloudBootDemo\Controller\OauthDemoController::class . ':getCCToken');
$app->post('/refreshToken', \WeimobCloudBootDemo\Controller\OauthDemoController::class . ':refreshToken');
$app->post('/getAuthCodeToken', \WeimobCloudBootDemo\Controller\OauthDemoController::class . ':getAuthCodeToken');
$app->post('/isEncrypt', \WeimobCloudBootDemo\Controller\DataSecurityController::class . ':isEncrypt');
$app->post('/encrypt', \WeimobCloudBootDemo\Controller\DataSecurityController::class . ':encrypt');
$app->post('/decrypt', \WeimobCloudBootDemo\Controller\DataSecurityController::class . ':decrypt');
$app->post('/apiInvoke', \WeimobCloudBootDemo\Controller\WeimobApiDemoController::class . ':apiInvoke');