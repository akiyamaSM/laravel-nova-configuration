<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inani\LaravelNovaConfiguration\Helpers\Configuration;
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

 Route::get('/getAllConfigurations', function () {
        return Configuration::all();
 });

 Route::get('/configurations/{configuration}', function(Configuration $configuration){
     return $configuration;
 });

 Route::post('/configurations/{configuration}', function(UpdateConfigurationRequest $request, Configuration $configuration){
     Configuration::setById(
        $request->get('id'),
        $request->get('key'),
        $request->get('value')
    );
    return response()->json([],
         200
    );
 });