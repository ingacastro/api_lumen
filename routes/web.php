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

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('canisters',  ['uses' => 'CanisterController@index']);

    $router->get('canisters/{id}', ['uses' => 'CanisterController@show']);

    $router->post('canisters', ['uses' => 'CanisterController@create']);

    $router->delete('canisters/{id}', ['uses' => 'CanisterController@delete']);

    $router->put('canisters/{id}', ['uses' => 'CanisterController@update']);

    $router->get('canister_name/{canister_name}', ['uses' => 'CanisterController@findByName']);
    
    $router->put('canister_status/{id}', ['uses' => 'CanisterController@updateStatus']);
});