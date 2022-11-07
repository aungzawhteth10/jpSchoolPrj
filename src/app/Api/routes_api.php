<?php
$app->get('/Api/ApiOrder', '\App\Api\ApiOrder:init');
$app->get('/Api/ApiOrder/getCategory', '\App\Api\ApiOrder:getCategory');
$app->get('/Api/ApiOrder/getMenu', '\App\Api\ApiOrder:getMenu');
$app->post('/Api/ApiOrder/printOrder', '\App\Api\ApiOrder:printOrder');
$app->post('/Api/ApiOrder/printDenpyou', '\App\Api\ApiOrder:printOrder');
