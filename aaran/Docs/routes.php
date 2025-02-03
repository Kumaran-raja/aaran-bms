<?php

use Illuminate\Support\Facades\Route;

//Master
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/docs', Aaran\Docs\Livewire\Docs\Index::class)->name('docs');

});
