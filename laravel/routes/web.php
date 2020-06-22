<?php

Route::get('/', 'PageController@showHome')->name('home');
Route::get('/agenda', 'PageController@showAgenda')->name('agenda');

Route::get('/vereniging', 'PageController@showVereniging')->name('vereniging');

Route::get('/contact', 'PageController@showContact')->name('contact');
Route::post('/contact', 'PageController@doContact')->name('doContact');
Route::get('/admin', 'AdminController@indexAdmin')->name('admin');
Route::get('/admin/{id}/edit', 'AdminController@editCMS')->name('editCMS');
Route::post('/admin/{id}/edit', 'AdminController@updateCMS')->name('updateCMS');


Route::get('/login','AccountController@indexLogin')->name('login');
Route::post('/login','AccountController@doLogin')->name('doLogin');
Route::get('/register','AccountController@indexRegister')->name('register');
Route::post('/register','AccountController@doRegister')->name('doRegister');

//
