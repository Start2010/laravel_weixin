<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/






Route::get('index','IndexController@index');
Route::get('input','UserController@index');
Route::get('query','UserController@query');
Route::get('querydb','UserController@querydb');
Route::get('viewindex','ViewController@index');
Route::get('view','ViewController@view');


Route::get('appindex','AppController@index');
Route::get('appview','AppController@view');


Route::get('response',function(){
	return response("response",200)->cookie('name','cookieTest');
});

Route::get('json',function(){
	return response()->json(['name'=>'alibabab','state'=>'CA']);
});


Route::resource('photo', 'PhotoController');
 


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web','admin_login']], function () {
    //
    Route::get('/', function () {
        return view('welcome');
    });

});

Route::auth();

