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

/*Route::get('/welcome1', function () {
    return view('welcome');
}); 
Route::get('/welcome2', function () {
    return view('admin.welcome');
}); 
Route::get('/welcome/3', function () {
    return view('admin.1.welcome');
}); 

	Route::get('/welcome4','WelcomeController@welcome');

	Route::get('/students/create','StudentsController@create' );
	Route::get('/students','StudentsController@index');
*/
	
	Route::get('/employees/','EmployeesController@index');
	Route::get('/employees/create','EmployeesController@create');

	Route::post('/employees','EmployeesController@store');

	Route::get('/employees/{id}/edit','EmployeesController@edit');


	Route::get('/posts','PostsController@index');

		Route::get('/posts/create','PostsController@create');

	Route::post('/posts','PostsController@store');
	Route::get('/posts/{id}/edit','PostsController@edit');


	Route::get('/comments','CommentsController@index');
	Route::get('/comments/create','CommentsController@create');

		Route::post('/comments','CommentsController@store');

	Route::get('/comments/{id}/edit','CommentsController@edit');


	Route::get('/roles/index','RolesController@index');
	Route::get('/roles/create','RolesController@create');

		Route::post('/roles','RolesController@store');

	Route::get('/roles/{id}/edit','RolesController@edit');