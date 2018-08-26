<?php

use Illuminate\Http\Request;

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

Route::group(['prefix' => 'store'], function () {
    Route::post('provinces', 'AddressController@initProvinces');
    Route::post('list-id-provinces', 'AddressController@listIdProvinces');
    Route::post('districts', 'AddressController@initDistricts');
    Route::post('list-id-districts', 'AddressController@listIdDistricts');
    Route::post('wards', 'AddressController@initWards');
    Route::post('list-id-wards', 'AddressController@listIdWards');
});
