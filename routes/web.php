<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//BOOKS GET
$router->get('/books', 'BooksController@index');
$router->get('/books/{id}', 'BooksController@show');

//BOOKS POST
$router->post('/books', 'BooksController@store');

//BOOKS PUT
$router->put('/books/{id}', 'BooksController@update');

//BOOKS DELETE
$router->delete('/books/{id}', 'BooksController@destroy');

//AUTHORS GET
$router->get('/authors', 'AuthorsController@index');
$router->get('/authors/{id}', 'AuthorsController@show');

//AUTHORS POST
$router->post('/authors', 'AuthorsController@store');

//AUTHORS PUT
$router->put('/authors/{id}', 'AuthorsController@update');

//AUTHORS DELETE
$router->delete('/authors/{id}', 'AuthorsController@destroy');