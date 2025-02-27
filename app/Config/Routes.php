<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('education', 'Education::index');
$routes->get('education', 'Education::index');
$routes->get('experience', 'Experience::index');
$routes->get('skills', 'Skills::index');
$routes->get('softwareskills', 'SoftwareSkills::index');


