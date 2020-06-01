<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Add a new property
Route::post('/property/new', 'PropertyController@store')->name('property.store');

// Add/Update an analytic to a property
Route::post('/property/analytics/new', 'PropertyAnalyticsController@store')->name('prop.analytic.store');

// Get all analytics for an inputted property
Route::get('/property/analytics/{property_id}', 'PropertyController@index');

// Get a summary of all property analytics for an inputted suburb or state or country 
Route::get('/property/analytic/{column}/{value}', 'PropertyController@getByColumnValue')->name('prop.analytic.colval');

