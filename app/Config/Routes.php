<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/master/user', 'Master::user');
$routes->post('/master/user_update', 'Master::user_update');
$routes->post('/master/user_delete', 'Master::user_delete');
$routes->post('/master/change_pass', 'Master::change_pass');
$routes->get('/master/active_user/(:any)', 'Master::active_user/$1');
$routes->get('/master/nonactive_user/(:any)', 'Master::nonactive_user/$1');

$routes->get('/master/role', 'Master::role');
$routes->post('/master/group_store', 'Master::group_store');
$routes->post('/master/group_update', 'Master::group_update');
$routes->post('/master/group_delete', 'Master::group_delete');
$routes->post('/master/perm_store', 'Master::perm_store');
$routes->post('/master/perm_update', 'Master::perm_update');
$routes->post('/master/perm_delete', 'Master::perm_delete');
$routes->post('/master/role_store', 'Master::role_store');
$routes->post('/master/role_update', 'Master::role_update');
$routes->post('/master/role_delete', 'Master::role_delete');
$routes->get('/master/user_role/(:any)', 'Master::user_role/$1');
$routes->post('/master/user_role_update', 'Master::user_role_update');

$routes->post('/home/bayar2', 'Home::bayar2');
$routes->post('/home/token', 'Home::token');

$routes->post('/midtrans/token', 'Midtrans::token');

$routes->get('/order/index', 'Order::index');
$routes->get('/order/index', 'Order::index');
$routes->get('/order/add', 'Order::add');
$routes->post('/order/store', 'Order::store');
$routes->get('/order/pay/(:any)', 'Order::pay/$1');
$routes->post('/order/finish', 'Order::finish');
