<?php

use Illuminate\Support\Facades\Route;

//web

Route::get('/', Aaran\Web\Livewire\Home\Index::class)->name('home');
Route::get('/abouts', Aaran\Web\Livewire\About\Index::class)->name('abouts');
Route::get('/blogs', Aaran\Web\Livewire\Blog\Index::class)->name('blogs');
Route::get('/services', Aaran\Web\Livewire\Service\Index::class)->name('services');
Route::get('/contacts', Aaran\Web\Livewire\Contact\Index::class)->name('contacts');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/dashboard', Aaran\Web\Livewire\Dashboard\Index::class)->name('dashboard');

});
