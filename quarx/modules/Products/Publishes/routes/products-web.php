<?php 

Route::group(['namespace' => 'Quarx', 'middleware' => ['web']], function () {

/*
|--------------------------------------------------------------------------
| Product App Routes
|--------------------------------------------------------------------------
*/

Route::resource('products', 'ProductController', ['only' => ['show', 'index']]);


});