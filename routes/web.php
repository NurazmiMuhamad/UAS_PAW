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

Route::get('/', 'HomeController@index')->name('index');
Route::get('/login', 'HomeController@login')->name('login');
Route::get('/postRegist', 'LoginController@postRegist')->name('postRegist');
Route::get('/doLogin', 'LoginController@doLogin')->name('doLogin');
Route::get('/updateProfileFreelancer', 'FreelancerController@updateProfileFreelancer')->name('updateProfileFreelancer');
Route::get('/updateProfileCompany', 'CompanyController@updateProfileCompany')->name('updateProfileCompany');
Route::get('/postJob','CompanyController@postJob')->name('postJob');
Route::get('/doPostJob','CompanyController@doPostJob')->name('doPostJob');
Route::get('/myJob','CompanyController@myJob')->name('myJob');
Route::get('/jobList', 'FreelancerController@jobList')->name('jobList');
Route::get('/MyjobList', 'FreelancerController@MyjobList')->name('MyjobList');
Route::get('/apply/{id}', 'FreelancerController@apply')->name('apply');
