<?php
/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/users', ['uses' => 'UserController@getUsers']);

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('/users', 'UserController@getUsers'); // Fetch all users
    $router->post('/users', 'UserController@addUser'); // Add a user
    $router->get('/users/{id}', 'UserController@show'); // Get user by ID
    $router->put('/users/{id}', 'UserController@update'); // Update user
    $router->delete('/users/{id}', 'UserController@delete'); // Delete user
});