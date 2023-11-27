<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\FormController;


Route::get('/', function () {
    return view('app');
})->name('app');


Route::get('/locale/{locale}', [LocaleController::class, 'setLocale'])->name('setLocale');
Route::get('/', [SiteController::class, 'app'])->name('app');
Route::get('/about', [SiteController::class, 'about'])->name('about');

Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/serviceitem', [SiteController::class, 'serviceitem'])->name('serviceitem');
Route::post('/process-form', [FormController::class, 'processForm'])->name('form.submit');





