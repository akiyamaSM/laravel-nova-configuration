<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Inani\LaravelNovaConfiguration\Helpers\Configuration;

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

 Route::post('/configurations/{configuration}', function(Request $request, Configuration $configuration){
     $return = Configuration::set(
        $request->get('key'),
        $request->get('value')
    );
    return response()->json([],
        $return ? 200 : 203
    );
 });