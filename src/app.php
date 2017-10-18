<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 18.10.17
 * Time: 23:14
 */
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('hello', new Routing\Route('/hello/{name}', array('name' => 'World')));
$routes->add('bye', new Routing\Route('/bye'));

return $routes;