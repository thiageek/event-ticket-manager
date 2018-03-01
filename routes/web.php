<?php

Route::get('/','AdminAuth\AdminAuthController@showLoginForm');
Route::post('login', 'AdminAuth\AdminAuthController@login');

Route::group(['middleware' => ['admin']], function(){
  Route::get('/dashboard','Admin\AdminController@dashboard');
  Route::get('/logout','AdminAuth\AdminAuthController@logout');
});

Route::get('/events','EventController@index');
Route::get('/events/index','EventController@index');
Route::get('/events/new','EventController@create');
Route::post('/events/store','EventController@store');
Route::get('/events/edit/{id}','EventController@edit');
Route::get('/events/delete/{id}','EventController@destroy');
