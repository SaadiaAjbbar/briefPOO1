<?php
chdir(dirname(__DIR__));

require 'router/router.php';

$router = new Router();
$router->redirecte();
