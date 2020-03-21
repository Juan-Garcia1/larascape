<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'home');

Route::get('/menu', 'MenuController@index');

Route::view('/contact', 'contact');

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes(['register' => false]);

Route::get('/dashboard', 'DashboardController@index');

// DASHBOARD/MENU-ITEMS
Route::get('dashboard/menu-items', 'MenuItemController@index');

Route::get('/dashboard/menu-items/create', 'MenuItemController@create');

Route::post('/dashboard/menu-items', 'MenuItemController@store');

Route::get('/dashboard/menu-items/{id}/edit', 'MenuItemController@edit');

Route::put('/dashboard/menu-items/{id}', 'MenuItemController@update');

Route::delete('/dashboard/menu-items/{id}', 'MenuItemController@destroy');

// DASHBOARD/MENU-ITEMS
Route::get('/dashboard/menu-categories', 'MenuCategoryController@index');

Route::post('/dashboard/menu-categories', 'MenuCategoryController@store');

Route::get('/dashboard/menu-categories/create', 'MenuCategoryController@create');

Route::delete('/dashboard/menu-categories/{id}', 'MenuCategoryController@destroy');

// Route::get('/dashboard', 'DashboardController@index');
