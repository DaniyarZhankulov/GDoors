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

//------------------------Главная---------------------------------

Route::get('/', function () {
    return view('index');
});

//------------------------Двери-----------------------------------
Route::get('door', 'DoorController@index');

//------------------------Каталог---------------------------------
Route::get('catalog', 'CatalogController@index');

//------------------------Интерьер--------------------------------
Route::get('interior', 'InteriorController@index');

Route::get('interior/add', function () {
	    return view('addInterior');
});

//-------------------------Корзина--------------------------------
Route::get('bucket', function () {
    return view('bucket');
});

//-------------------------Покупка--------------------------------
Route::get('purchase', function () {
	    return view('purchase');
});

Route::post('purchase/create', 'PurchaseController@create');

//-------------------------Завершение-----------------------------
Route::get('finish', function () {
    return view('finish');
});


//-----------------------------API--------------------------------
Route::get('api/showDoors', 'API@showDoors');
Route::get('api/showDoor/{id}', 'API@showDoor');
Route::post('api/createDoor', 'API@createDoor');
Route::any('api/updateDoor/{$record}', 'API@updateDoor');
Route::get('api/deleteDoor/{id}', 'API@deleteDoor');