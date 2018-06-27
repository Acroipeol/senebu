<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/myapp', 'HomeController@myapp')->name('myapp');
Route::get('/building', 'BuildingDesignController@building')->name('building');
Route::get('/hardwares', 'HardwaresController@hardwares')->name('hardwares');
Route::get('/furnitures', 'FurnituresController@furnitures')->name('furnitures');
Route::get('/sliding', 'SlidingDoorDesignsController@sliding')->name('sliding');
Route::get('/garden', 'HomeGardenLandscapingController@garden')->name('garden');
Route::get('/decoration', 'DecorationDesignController@decoration')->name('decoration');

Route::get('/architect', 'ArchitectController@architect')->name('architect');
Route::get('/user', 'UserController@user')->name('user');

Route::get('/architectHouses', 'ArchitectHousesController@architectHouses')->name('architectHouses');
Route::get('/architectInfrastracture', 'ArchitectInfrastractureController@architectInfrastracture')->name('architectInfrastracture');
Route::get('/architectOtherdesign', 'ArchitectOtherDesignController@architectOtherdesign')->name('architectOtherdesign');
Route::get('/architectUpload', 'ArchitectUploadDesignController@architectUpload')->name('architectUpload');