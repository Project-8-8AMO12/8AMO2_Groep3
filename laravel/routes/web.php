<?php
// Errors

Route::get('/401', function () {
    return view('errors.401');
});

// Routes

Route::get('/', 'PageController@showHome')->name('home');
Route::get('/agenda', 'PageController@showAgenda')->name('agenda');

Route::get('/vereniging', 'PageController@showVereniging')->name('vereniging');

Route::get('/contact', 'PageController@showContact')->name('contact');
Route::post('/contact', 'PageController@doContact')->name('doContact');
Route::get('/admin', 'AdminController@indexAdmin')->name('admin')->middleware('mod.guard');
Route::get('/admin/{id}/edit', 'AdminController@editCMS')->name('editCMS')->middleware('mod.guard');
Route::post('/admin/{id}/edit', 'AdminController@updateCMS')->name('updateCMS')->middleware('mod.guard');
Route::get('/manageusers', 'AdminController@manageusers')->name('manageusers')->middleware('admin.guard');
Route::get('/manageusers/promote/{id}', 'AdminController@promote')->name('promote')->middleware('admin.guard');
Route::get('/manageusers/delete/{id}', 'AdminController@delete')->name('delete')->middleware('admin.guard');


Route::get('/login', 'AccountController@indexLogin')->name('login');
Route::post('/login', 'AccountController@doLogin')->name('doLogin');
Route::get('/register', 'AccountController@indexRegister')->name('register')->middleware('admin.guard');
Route::post('/register', 'AccountController@doRegister')->name('doRegister')->middleware('admin.guard');

Route::get('/login','AccountController@indexLogin')->name('login');
Route::post('/login','AccountController@doLogin')->name('doLogin');
Route::get('/register','AccountController@indexRegister')->name('register');
Route::post('/register','AccountController@doRegister')->name('doRegister');

//
