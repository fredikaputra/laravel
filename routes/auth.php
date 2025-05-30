<?php

use Illuminate\Support\Facades\Route;

Route::get('/unauthenticated', fn () => 'You are not authenticated.')
    ->name('login');
