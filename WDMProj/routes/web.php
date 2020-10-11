<?php

use Illuminate\Support\Facades\Route;

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
    return view('Inicio');
});

Route::get('Inicio', function()
{
    return view('Inicio');
});

Route::get('AboutUs', function()
{
    return view('AboutUs');
});

Route::get('NuestrosEquipos', function()
{
    return view('NuestrosEquipos');
});

Route::get('ContactUs', function()
{
    return view('ContactUs');
});
Route::post('/query/insert','queryController@insert');

Route::get('Login', function()
{
    return view('Login');
});
Route::post('/user/insert','userController@insert');
Route::post('/user/checklogin','userController@checklogin');
Route::get('User_dash','userController@mainSession');
Route::post('/user/update','userController@update');

Route::get('Admin_login', function()
{
    return view('Admin_login');
});
Route::post('/admin/insert','adminController@insert');
Route::post('/admin/checklogin','adminController@checklogin');
Route::get('/A_manage_users','adminController@manageUsers');
Route::get('/A_manage_events', 'adminController@manageEvents');
Route::get('/AdminPage','adminController@viewPage');
Route::get('/admin/deleteuser/{id}','adminController@delUser');

Route::get('Registration', function()
{
    return view('Registration');
});



Route::get('Edit_profile', function()
{
    return view('Edit_profile');
});

Route::get('/Event_register', 'userController@regEvents');
Route::get('/user/reg/{id}','userController@register');
Route::get('/Events_view','userController@manageEvents');
Route::get('/user/del/{id}','userController@delEvents');

Route::get('Events', function()
{
    return view('Events');
});

Route::get('NewEvent', function()
{
    return view('NewEvent');
});
Route::post('/event/new','adminController@insertEvent');
Route::get('/admin/deletevent/{id}','adminController@delEvent');

