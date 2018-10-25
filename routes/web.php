<?php

Route::get('/', 'setupCtrl@index');
Route::get('/login', 'setupCtrl@loggaIn')->name('login');
Route::post('/login/checklogin', 'setupCtrl@checklogin');
Route::get('/logout', 'setupCtrl@logout');
Route::get('/register', 'setupCtrl@registerForm')->name('registerForm');
Route::post('/register/saveUser', 'setupCtrl@registerUser')->name('registerUser');
Route::get('/SidanUnderUppbyggnad', 'setupCtrl@SidanUnderUppbyggnad')->name('SidanUnderUppbyggnad');

Route::get('/December2017', 'calendarCtrl@dec17')->name('December2017');
Route::get('/Januari2018', 'calendarCtrl@jan18')->name('Januari2018');
Route::get('/Februari2018', 'calendarCtrl@feb18')->name('Februari2018');

Route::get('/recipe/{id}', 'recipesCtrl@show')->name('show');
Route::post('/recipe/post_comment', 'recipesCtrl@postComment')->name('postComment');
Route::post('/recipe/delete_comment', 'recipesCtrl@deleteComment')->name('deleteComment');