<?php
Route::get('add', 'InventoryController@add' );
Route::get('sku',function(){
	return View::make('inventory.sku');
});
Route::get('auto',function(){
	return View::make('inventory.auto');
});
Route::get('data',function(){
	return View::make('item-data.php');
});
Route::get('/', 'LoginController@index');
Route::post('/login','LoginController@postLogin');
Route::get('/logout','LoginController@getLogout');
//Beranda
Route::get('/beranda','BerandaController@getIndex');
//Common-Code
Route::get('/common-code','CommoncodeController@getIndex');
Route::post('/common-code/tambah','CommoncodeController@postTambah');
Route::get('/common-code/{hcode}','CommoncodeController@postHcode');
Route::post('/common-code/update','CommoncodeController@postUpdate');
Route::get('/common-code/delete/{id}','CommoncodeController@getDelete');
//Users
Route::get('/users','UserController@getIndex');
Route::post('/create-users','UserController@postCreate');
Route::get('/users/{code}','UserController@getCode');
//Products
Route::get('/products','ProductController@getIndex');
Route::get('/products/{code}','ProductController@getCode');
Route::get('/products/delete/{code}','ProductController@destroy');
Route::post('/edit-products','ProductController@update');
Route::get('/table',function(){
	return View::make('products.table');
});
Route::post('/create-product','ProductController@postCreate');
//inventory
Route::get('/inbound', 'InventoryController@getIndex');
Route::post('inbound-create','InventoryController@postCreate');
Route::get('/return','InventoryController@getReturn');
Route::post('/return-create','InventoryController@postCreateReturn');
Route::controller('site', 'InventoryController');
//PO
Route::get('/purchase-order','PurchaseOrderController@getIndex');
Route::post('/purchase-order/create','PurchaseOrderController@postCreate');
Route::controller('purchase-o', 'PurchaseOrderController');
//Customer
Route::get('/customers','CustomersController@getIndex');
Route::post('/customers-create','CustomersController@postCreate');
Route::get('/customers/{code}','CustomersController@getCode');
Route::post('customers-update','CustomersController@postUpdate');
Route::get('customer/delete/{customer_code}','CustomersController@destroy');
// DO
Route::get('/delivery-order','DeliveryOrderController@index');
Route::post('/create-delivery-order','DeliveryOrderController@create');
Route::controller('delivery', 'DeliveryOrderController');

Route::get('/search',function()
{
	return View::make('search');
});
Route::post('executeSearch',array('uses'=>'SearchController@executeSearch'));
Route::controller('execute', 'SearchController');