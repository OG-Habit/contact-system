<?php

use App\Livewire\Contacts;
use App\Livewire\CreateContact;
use App\Livewire\EditContact;
use App\Livewire\Login;
use App\Livewire\Register;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/create", CreateContact::class);

Route::middleware('auth')->group(function() {
    Route::get('contacts', Contacts::class);
    Route::get('contacts/create', CreateContact::class);
    Route::get('contacts/edit/{id}', EditContact::class);
});

// Route::get("/", Login::class);
Route::get("login", Login::class);

Route::get('register', Register::class);
