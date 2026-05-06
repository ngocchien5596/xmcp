<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/gioi-thieu', [PageController::class, 'introduction'])->name('introduction');
Route::get('/thong-tin-cong-ty', [PageController::class, 'companyInfo'])->name('company.info');
Route::get('/san-pham', [ProductController::class, 'index'])->name('products.index');
Route::get('/san-pham/{slug}', [ProductController::class, 'show'])->name('products.show');
Route::get('/tin-tuc', [NewsController::class, 'index'])->name('news.index');
Route::get('/tin-tuc/{slug}', [NewsController::class, 'show'])->name('news.show');
Route::get('/chinh-sach-chat-luong', [DocumentController::class, 'index'])->name('quality-policy.index');
Route::get('/bao-cao-tai-chinh', [DocumentController::class, 'financialReports'])->name('financial-reports.index');
Route::get('/du-an', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/chi-tiet-du-an/{slug}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/lien-he', [ContactController::class, 'index'])->name('contact.index');
Route::post('/lien-he', [ContactController::class, 'submit'])->name('contact.submit');
