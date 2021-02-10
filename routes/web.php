<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/auth/email/edit','AuthMailController@edit' )->name('edit-email');
Route::post('/auth/email/send','AuthMailController@send' )->name('send-email');
