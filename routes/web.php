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

Route::get('/', 'MainController@index')->name('/');

Auth::routes();


/* Register and Login routes */
Route::get('/logged', 'HomeController@logged')->name('logged');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');

/*Users CRUD Routes */
Route::resource('users', 'UserController');

/*Events CRUD Routes */
Route::resource('events', 'EventController');

/* Dashboard Routes */
Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

/* Event Reservation POST Route */
Route::post('events/register/{event}', 'ReservationController@registration', function (App\Event $event){

})->name('reservation.store');

