<?php

use Illuminate\Support\Facades\Route;

//web

Route::get('/', Aaran\Web\Livewire\Home\Index::class)->name('home');
Route::get('/about', Aaran\Web\Livewire\Home\Index::class)->name('about');
Route::get('/blog', Aaran\Web\Livewire\Home\Index::class)->name('blog');
Route::get('/service', Aaran\Web\Livewire\Home\Index::class)->name('service');
Route::get('/contact', Aaran\Web\Livewire\Home\Index::class)->name('contact');


Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/dashboard', Aaran\Web\Livewire\Dashboard\Index::class)->name('dashboard');

});
