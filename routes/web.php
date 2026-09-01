<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RobotsController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/tentang-kami', [PageController::class, 'about'])->name('about');

Route::get('/layanan', [ServiceController::class, 'index'])->name('services.index');
Route::get('/layanan/{service:slug}', [ServiceController::class, 'show'])->name('services.show');

Route::get('/wilayah-layanan', [PageController::class, 'areas'])->name('areas');
Route::get('/galeri', [PageController::class, 'gallery'])->name('gallery');

Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
Route::post('/kontak', [ContactController::class, 'store'])->name('contact.store');

Route::get('/sitemap.xml', SitemapController::class)->name('sitemap');
Route::get('/robots.txt', RobotsController::class)->name('robots');
