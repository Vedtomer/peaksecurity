<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact-us', [HomeController::class, 'contactUs']);
Route::get('/about-us', [HomeController::class, 'aboutUs']);
Route::get('/faq', [HomeController::class, 'faq']);
Route::get('/our-services', [HomeController::class, 'services']);

Route::get('/services/security-guard-services', [HomeController::class, 'securityGuard'])->name('services.security-guard');
Route::get('/services/patrol-services', [HomeController::class, 'patrol'])->name('services.patrol');
Route::get('/services/cctv-services', [HomeController::class, 'cctv'])->name('services.cctv');



Route::post('/email', [HomeController::class, 'sendEmail']);
