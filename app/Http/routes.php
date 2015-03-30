<?php


/**
 * public/guest routes
 */
Route::get('/', 'PagesController@home');
Route::get('other', 'PagesController@other');
Route::get('services', 'PagesController@services');
Route::get('courses', 'PagesController@courses');


Route::get('home', 'HomeController@index');
Route::get('admin', 'HomeController@index');

/**
 * user routes
 */
Route::get('admin/users', 'UsersController@index');
Route::get('admin/users/edit/{id}', 'UsersController@showEdit');
Route::post('admin/users/edit/{id}', 'UsersController@edit');
Route::get('admin/users/changepassword/{id}', 'Auth\PasswordController@showPasswordChange');
Route::post('admin/users/changepassword/{id}', 'Auth\PasswordController@changePassword');
Route::post('admin/users/register', 'UsersController@registerUser');
Route::delete('admin/users/{id}', 'UsersController@deleteUser');

/**
 * course routes
 */
Route::get('admin/courses', 'CoursesController@index');
Route::get('admin/courses/category/{id}', 'CoursesController@showCategory');
Route::post('admin/courses', 'CoursesController@store');
Route::post('admin/courses/search', 'CoursesController@search');
Route::get('admin/courses/create', 'CoursesController@create');
Route::get('admin/courses/edit/{id}', 'CoursesController@edit');
Route::post('admin/courses/edit/{id}', 'CoursesController@update');
Route::delete('admin/courses/{id}', 'CoursesController@delete');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
