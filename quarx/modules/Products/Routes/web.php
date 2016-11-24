<?php 

Route::group(['namespace' => 'Quarx\Modules\Products\Controllers', 'prefix' => 'quarx', 'middleware' => ['web', 'auth', 'quarx']], function () { 

/*
|--------------------------------------------------------------------------
| Products Routes
|--------------------------------------------------------------------------
*/

Route::resource('products', 'ProductsController', [ 'except' => ['show'], 'as' => 'quarx' ]);
Route::post('products/search', 'ProductsController@search');

});