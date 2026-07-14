<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-group', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/projects', [PageController::class, 'projects'])->name('projects');
Route::get('/projects/details', [PageController::class, 'projectDetails'])->name('project.details');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/news/details', [PageController::class, 'newsDetails'])->name('news.details');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Business Areas
Route::get('/enviro', [PageController::class, 'enviro'])->name('enviro');
Route::get('/panther-oil', [PageController::class, 'pantherOil'])->name('panther-oil');
Route::get('/panther-mat', [PageController::class, 'pantherMat'])->name('panther-mat');
Route::get('/panther-build', [PageController::class, 'pantherBuild'])->name('panther-build');

// Institutional Pages
Route::get('/certificacoes', [PageController::class, 'certifications'])->name('certifications');
Route::get('/sustentabilidade', [PageController::class, 'sustainability'])->name('sustainability');
Route::get('/carreiras', [PageController::class, 'careers'])->name('careers');
Route::get('/politica-de-privacidade', [PageController::class, 'privacy'])->name('privacy');
