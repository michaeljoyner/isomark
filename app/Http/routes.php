<?php


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
/**
 * public/guest routes
 */
Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('services', 'PagesController@services');
Route::get('courses', 'PagesController@courses');
Route::get('courses/{categorySlug}', 'PagesController@courses');
Route::get('workshops', 'PagesController@workshops');
Route::get('contact', 'PagesController@contact');
Route::get('sitemap', 'PagesController@sitemap');

/*
 * Course Bookings
 */
Route::get('bookings', 'Courses\BookingsController@create');
Route::get('bookings/{courseSlug}', 'Courses\BookingsController@create');
Route::get('workshops/bookings/{workshopSlug}', 'Courses\BookingsController@createWorkshopBooking');
Route::post('booking', 'Courses\BookingsController@store');

/*
 * Contact form
 */

Route::post('ajax/contact', 'PagesController@contactMessage');

Route::get('home', 'HomeController@index');
Route::get('admin', 'HomeController@index');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function()
{
    /*
     * Course bookings admin
     */
    Route::get('bookings', 'Courses\BookingsController@index');
    Route::post('bookings/toggleread/{id}', 'Courses\BookingsController@toggleRead');
    Route::post('bookings/archive/{id}', 'Courses\BookingsController@archive');
    Route::get('bookings/archived', 'Courses\BookingsController@archivedIndex');
    /**
     * user routes
     */
    Route::get('help', 'UsersController@help');
    Route::get('users', 'UsersController@index');
    Route::get('users/edit/{id}', 'UsersController@showEdit');
    Route::post('users/edit/{id}', 'UsersController@edit');
    Route::get('users/changepassword/{id}', 'Auth\PasswordController@showPasswordChange');
    Route::post('users/changepassword/{id}', 'Auth\PasswordController@changePassword');
    Route::post('users/register', 'UsersController@registerUser');
    Route::delete('users/{id}', 'UsersController@deleteUser');

    /**
     * course routes
     */
    Route::get('courses', 'Courses\CoursesController@index');
    Route::get('courses/category/{id}', 'Courses\CoursesController@showCategory');
    Route::post('courses', 'Courses\CoursesController@store');
    Route::post('courses/search', 'Courses\CoursesController@search');
    Route::get('courses/create', 'Courses\CoursesController@create');
    Route::get('courses/edit/{id}', 'Courses\CoursesController@edit');
    Route::post('courses/edit/{id}', 'Courses\CoursesController@update');
    Route::delete('courses/{id}', 'Courses\CoursesController@delete');


    /*
     * Workshops routes
     */
    Route::get('workshops', 'Courses\WorkshopsController@index');
    Route::get('workshops/create', 'Courses\WorkshopsController@create');
    Route::get('workshops/edit/{id}', 'Courses\WorkshopsController@edit');
    Route::post('workshops', 'Courses\WorkshopsController@store');
    Route::post('workshops/{id}', 'Courses\WorkshopsController@update');
    Route::delete('workshops/{id}', 'Courses\WorkshopsController@deleteById');
    /*
     * Contacts
     */
    Route::get('contacts/show', 'Admin\ContactsController@index');
    Route::get('contacts/address/create', 'Admin\ContactsController@createAddress');
    Route::post('contacts/address', 'Admin\ContactsController@storeAddress');
    Route::get('contacts/address/{id}', 'Admin\ContactsController@editAddress');
    Route::post('contacts/address/{id}', 'Admin\ContactsController@updateAddress');
    Route::get('contacts/person/create', 'Admin\ContactsController@createPerson');
    Route::post('contacts/person', 'Admin\ContactsController@storePerson');
    Route::get('contacts/person/{id}', 'Admin\ContactsController@editPerson');
    Route::post('contacts/person/{id}', 'Admin\ContactsController@updatePerson');
    Route::get('contacts/phonenumber/create', 'Admin\ContactsController@createPhoneNumber');
    Route::post('contacts/phonenumber', 'Admin\ContactsController@storePhoneNumber');
    Route::get('contacts/phonenumber/{id}', 'Admin\ContactsController@editPhoneNumber');
    Route::post('contacts/phonenumber/{id}', 'Admin\ContactsController@updatePhoneNumber');
    Route::delete('contacts/address/{id}', 'Admin\ContactsController@deleteAddress');
    Route::delete('contacts/person/{id}', 'Admin\ContactsController@deletePerson');
    Route::delete('contacts/phonenumber/{id}', 'Admin\ContactsController@deletePhoneNumber');
});



