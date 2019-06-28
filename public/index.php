<?php

echo $query = rtrim($_SERVER['QUERY_STRING'], '/');

require "../vendor/core/Router.php";
require "../vendor/libs/functions.php";

$router = new Router();

Router::add('posts/add', ['controller' => 'Posts', 'action' => 'add']);
Router::add('posts/index', ['controller' => 'Posts', 'action' => 'index']);
Router::add('', ['controller' => 'Main', 'action' => 'index']);

debug(Router::getRoutes());

if (Router::matchRoute($query)) {
	debug(Router::getRoute());
} else {
	echo "404";
}