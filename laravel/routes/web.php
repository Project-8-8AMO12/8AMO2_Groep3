<?php

Route::get('/', 'PageController@showHome')->name('home');
Route::get('/agenda', 'PageController@showAgenda')->name('agenda');
Route::get('/vereniging', 'PageController@showVereniging')->name('vereniging');

Route::get('/login','AccountController@indexLogin')->name('login');
Route::post('/login','AccountController@doLogin')->name('doLogin');
Route::get('/register','AccountController@indexRegister')->name('register');
Route::post('/register','AccountController@doRegister')->name('doRegister');
