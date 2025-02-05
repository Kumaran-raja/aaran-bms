<?php

use Illuminate\Support\Facades\Route;

//Core
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/docs', Aaran\Temp\Livewire\Template\Index::class)->name('docs');

});
