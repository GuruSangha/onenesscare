<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and all
| of them will be assigned to the "web" middleware group.
|
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Static pages
Route::view('/about', 'pages.about')->name('about');
Route::view('/ndis-support', 'pages.ndis-support')->name('ndis.support');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/privacy', 'pages.privacy')->name('privacy');

// Contact
Route::controller(ContactController::class)->group(function () {
    Route::get('/contact', 'show')->name('contact.show');
    Route::post('/contact', 'send')->name('contact.send');
});
// Services
Route::get('/services', function () {
    $services = [
        'employment' => 'Employment Support',
        'daily' => 'Daily Personal Care',
        'shared' => 'Shared Living Assistance',
        'household' => 'Household Help',
        'high' => 'High Intensity Care',
        'transport' => 'Transport Assistance',
        'community' => 'Community Participation',
        'social' => 'Social & Recreational Access',
        'transitions' => 'Life Transitions Support',
        'nursing' => 'In-Home Nursing Care',
        'lifeskills' => 'Life Skills Development',
        'supported' => 'Supported Employment',
        'group' => 'Group Centre Activities',
    ];
    $tab = isset($services[request()->query('tab')]) ? request()->query('tab') : 'employment';

    return view('pages.services', compact('services','tab'));
})->name('services');