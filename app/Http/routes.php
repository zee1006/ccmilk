<?php

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

$app->get('/welcome', function () use ($app) {
    return $app->welcome();
});


$app->get('/', function ()  {
    return view('main');
});

$app->get('/login', function ()  {
    return view('login');
});



$app->get('/getProductList', function ()  {
	return DB::select("SELECT * FROM Product");    
});

