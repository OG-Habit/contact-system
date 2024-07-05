<?php

use App\Livewire\CreateContact;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/create", CreateContact::class);
