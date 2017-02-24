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

$app->get('/', function () use ($app) {

	$data = [
		['name' => 'Chris', 'role' => 'Developer'],
		['name' => 'Eelke', 'role' => 'Developer'],
		['name' => 'Helge', 'role' => 'Developer'],
		['name' => 'Jimme', 'role' => 'Developer'],
		['name' => 'Roy', 'role' => 'Developer'],
	];

	$params = app('request')->all();

	$filtered = array_filter($data, function ($item) use($params) {
		
		foreach($params as $key => $value) {
			if ($value && strpos($item[$key], $value)===false) {
				return false;
			}
		}

		return true;

	});

	return array_values($filtered);

});

