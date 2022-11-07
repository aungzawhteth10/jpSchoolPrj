<?php
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

date_default_timezone_set('Asia/Tokyo');
session_start();

require __DIR__ . '/../../vendor/autoload.php';

$app = AppFactory::create();
$twig = Twig::create(__DIR__ . '/../app/templates', ['cache' => false]);
$container = $app->getContainer();
$app->add(TwigMiddleware::create($app, $twig));
