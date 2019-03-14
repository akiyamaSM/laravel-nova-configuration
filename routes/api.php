<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inani\LaravelNovaConfiguration\Helpers\Configuration;
use Inani\LaravelNovaConfiguration\Http\CreateConfigurationRequest;
use Inani\LaravelNovaConfiguration\Http\UpdateConfigurationRequest;

/*
|--------------------------------------------------------------------------
| Tool API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tool. These routes
| are loaded by the ServiceProvider of your tool. They are protected
| by your tool's "Authorize" middleware by default. Now, go build!
|
*/

 Route::get('/getAllConfigurations', '\Inani\LaravelNovaConfiguration\Http\ConfigurationController@index');

 Route::get('/configurations/{configuration}', '\Inani\LaravelNovaConfiguration\Http\ConfigurationController@show');

Route::delete('/configurations/{configuration}', '\Inani\LaravelNovaConfiguration\Http\ConfigurationController@delete');

Route::post('configurations/create', '\Inani\LaravelNovaConfiguration\Http\ConfigurationController@save');

 Route::patch('/configurations', '\Inani\LaravelNovaConfiguration\Http\ConfigurationController@update');

