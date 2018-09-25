<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
$users = App\User::all();
	foreach ($users as $user) {
	Mail::send('emails',['user'=> $user],function($message) use($user){
$message->from('AdminDtistriFacil@distrifacil.me','administrador');
$message->to($user->email,$user->nombre)->subject('tenemos novedades para ti' .$user->nombre);
	});
	}
*/

	Route::get('/', [
	'as' => 'home',
	'uses' => 'StoreController@index'
]);

Route::get('enviar',['as' => 'mail', function(){
$users = App\User::all();
	foreach ($users as $user) {
	Mail::send('emails',['user'=> $user],function($message) use($user){
$message->from('distrifacilarmenia@gmil.com','La Despensa de la Gaseosa');
$message->to($user->email,$user->nombre)->subject('tenemos una promocion que te puede interesar ' .$user->nombre);
	});
	}

	return "el correo fue enviado con exito" ;
}]);
Route::bind('product', function($direccion){
	return App\Product::where('direccion', $direccion)->first();
});



// User dependency injection
Route::bind('user', function($user){
    return App\User::find($user);
});



Route::get('/', [
	'as' => 'home',
	'uses' => 'StoreController@index'
]);
Route::get('product/{direccion}', [
	'as' => 'product-detail',
	'uses' => 'StoreController@show'
]);

// Carrito -------------


Route::get('carrito/show', [
	'as' => 'carrito-show',
	'uses' => 'CartController@show'
]);

Route::get('carrito/add/{product}', [
	'middleware' => 'auth:user',
	'as' => 'carrito-add',
	'uses' => 'CartController@add'
]);

Route::get('carrito/delete/{product}',[
	'as' => 'carrito-delete',
	'uses' => 'CartController@delete'
]);

Route::get('carrito/trash', [
	'as' => 'carrito-trash',
	'uses' => 'CartController@trash'
]);

Route::get('carrito/update/{product}/{quantity}', [
	'as' => 'carrito-update',
	'uses' => 'CartController@update'
]);

Route::get('order-detail', [
	'middleware' => 'auth:user',
	'as' => 'order-detail',
	'uses' => 'CartController@orderDetail'
]);


// Authentication routes...


Route::get('auth/login', [
	'as' => 'login-get',
	'uses' => 'Auth\AuthController@getLogin'
]);

Route::post('auth/login', [
	'as' => 'login-post',
	'uses' => 'Auth\AuthController@postLogin'
]);

Route::get('auth/logout', [
	'as' => 'logout',
	'uses' => 'Auth\AuthController@getLogout'
]);

// Registration routes...
Route::get('auth/register', [
	'as' => 'register-get',
	'uses' => 'Auth\AuthController@getRegister'
]);

Route::post('auth/register', [
	'as' => 'register-post',
	'uses' => 'Auth\AuthController@postRegister'
]);


// ADMIN -------------
Route::group(['namespace' => 'Admin', 'middleware' => ['auth'], 'prefix' => 'admin'], function()
{

	Route::get('home', function(){
		return view('admin.home');
	});

	Route::resource('product', 'ProductController');



	Route::get('orders', [
		'as' => 'admin.order.index',
		'uses' => 'OrderController@index'
	]);

	Route::post('order/get-items', [
	    'as' => 'admin.order.getItems',
	    'uses' => 'OrderController@getItems'
	]);

	Route::post('order/{id}', [
	    'as' => 'admin.order.destroy',
	    'uses' => 'OrderController@destroy'
	]);

	Route::get('sear', [
		'as' => 'store.seac',
		'uses' => 'ProductController@index'
	]);
	Route::get('sea', [
		'as' => 'store.sea',
		'uses' => 'UserController@index'
	]);


});

Route::get('search', [
	'as' => 'store.search',
  'uses' => 'SearchController@index'
]);
Route::get('saveOrder', array(
	'as' => 'save-order',
	'uses' => 'StoreController@getOrder',
));
	Route::resource('admin/user', 'Admin\UserController');


//	Route::get('admin/user', [
	//	'middleware' => 'auth:ADMIN',
	//	'as' => 'admin.user.index',
	//	'uses' => 'UserController@index'
//	]);
