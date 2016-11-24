<?php 

Route::group(['namespace' => 'Quarx', 'middleware' => ['web']], function () {

/*
|--------------------------------------------------------------------------
| Product App Routes
|--------------------------------------------------------------------------
*/

Route::resource('products', 'ProductsController', ['only' => ['show', 'index']]);


});