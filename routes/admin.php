<?php

use Illuminate\Support\Facades\Route;

Route::get('/', fn() => 'Hello World !')->name('home');
