<?php

use App\Http\Controllers\BladeExampleComtroller;
use Illuminate\Support\Facades\Route;

Route::get('/', [BladeExampleComtroller::class, 'index']);
