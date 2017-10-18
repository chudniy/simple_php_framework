<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 18.10.17
 * Time: 23:14
 */
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('leap_year', new Routing\Route('/is_leap_year/{year}', array(
    'year' => null,
    '_controller' => 'Calendar\Controller\LeapYearController::indexAction',
)));

return $routes;