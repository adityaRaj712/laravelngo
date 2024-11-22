<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonateController;
use App\Http\Controllers\SponsorController;
use App\Http\Controllers\BlogController;

Route::get('/', function () {
    return view('landing');
});
Route::view('/blogs', 'blogs')->name('blogs');

Route::view('/about', 'about')->name('about');
Route::view('/sponsor', 'sponsor')->name('sponsor');

Route::view('/contact', 'contact')->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/thankyou', [ContactController::class, 'thankyou'])->name('contact.thankyou');


Route::view('/sponsorform','sponsorform')->name('sponsorform');
Route::view('/sponsorform2','sponsorform2')->name('sponsorform2');

Route::get('/donate', [DonateController::class, 'showDonatePage'])->name('donate');
Route::post('/sponsor/store', [SponsorController::class, 'store'])->name('sponsor.store');

Route::view('/sponsorform','sponsorform')->name('sponsorform');
Route::post('/sponsor/store', [SponsorController::class, 'store'])->name('sponsor.store');
Route::get('/confirmation', [SponsorController::class, 'confirmation'])->name('sponsor.confirmation');

