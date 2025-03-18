<?php

use App\Http\Controllers\GeneralControllers;
use Illuminate\Support\Facades\Route;


Route::get('locale/{locale}', function ($locale) {
    session()->put('locale', $locale);
    return redirect()->back();
});

Route::get('/', [GeneralControllers::class, 'index'])->name('index');
