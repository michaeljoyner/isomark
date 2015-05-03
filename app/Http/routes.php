<?php


/**
 * public/guest routes
 */
Route::get('/', 'PagesController@home');
Route::get('other', 'PagesController@other');
Route::get('services', 'PagesController@services');
Route::get('courses', 'PagesController@courses');
Route::get('courses/{categorySlug}', 'PagesController@courses');
Route::get('workshops', 'PagesController@workshops');

/*
 * Course Bookings
 */
Route::get('bookings', 'Courses\BookingsController@create');
Route::get('bookings/{courseSlug}', 'Courses\BookingsController@create');
Route::get('workshops/bookings/{workshopSlug}', 'Courses\BookingsController@createWorkshopBooking');
Route::post('booking', 'Courses\BookingsController@store');
Route::get('admin/bookings', 'Courses\BookingsController@index');

Route::get('home', 'HomeController@index');
Route::get('admin', 'HomeController@index');

Route::get('info', function() {
   return phpinfo();
});

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

/*
 * Workshops routes
 */
Route::get('admin/workshops', 'Courses\WorkshopsController@index');
Route::get('admin/workshops/create', 'Courses\WorkshopsController@create');
Route::get('admin/workshops/edit/{id}', 'Courses\WorkshopsController@edit');
Route::post('admin/workshops', 'Courses\WorkshopsController@store');
Route::post('admin/workshops/{id}', 'Courses\WorkshopsController@update');
Route::delete('admin/workshops/{id}', 'Courses\WorkshopsController@deleteById');

/*
 * Contacts
 */
Route::get('admin/contacts/show', 'Admin\ContactsController@index');

Route::get('admin/contacts/address/create', 'Admin\ContactsController@createAddress');
Route::post('admin/contacts/address', 'Admin\ContactsController@storeAddress');
Route::get('admin/contacts/address/{id}', 'Admin\ContactsController@editAddress');
Route::post('admin/contacts/address/{id}', 'Admin\ContactsController@updateAddress');

Route::get('admin/contacts/person/create', 'Admin\ContactsController@createPerson');
Route::post('admin/contacts/person', 'Admin\ContactsController@storePerson');
Route::get('admin/contacts/person/{id}', 'Admin\ContactsController@editPerson');
Route::post('admin/contacts/person/{id}', 'Admin\ContactsController@updatePerson');

Route::get('admin/contacts/phonenumber/create', 'Admin\ContactsController@createPhoneNumber');
Route::post('admin/contacts/phonenumber', 'Admin\ContactsController@storePhoneNumber');
Route::get('admin/contacts/phonenumber/{id}', 'Admin\ContactsController@editPhoneNumber');
Route::post('admin/contacts/phonenumber/{id}', 'Admin\ContactsController@updatePhoneNumber');

Route::delete('admin/contacts/address/{id}', 'Admin\ContactsController@deleteAddress');
Route::delete('admin/contacts/person/{id}', 'Admin\ContactsController@deletePerson');
Route::delete('admin/contacts/phonenumber/{id}', 'Admin\ContactsController@deletePhoneNumber');

/*
 * Contact form
 */

Route::post('ajax/contact', 'PagesController@contactMessage');