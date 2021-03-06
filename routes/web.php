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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
    Route::get('adminlte2', 'Adminlte2Controller@index')->name('adminlte2');

    Route::get('adminlte', 'AdminlteController@index')->name('adminlte');

    Route::get('users', 'UsersController@fetchUsers');

    Route::post('/enrollment/user', 'EnrollmentController@user');

    Route::post('/enrollment/person', 'EnrollmentController@person');

});
