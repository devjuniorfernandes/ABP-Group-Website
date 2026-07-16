<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AdminProjectController;
use App\Http\Controllers\Admin\AdminNewsController;
use App\Http\Controllers\Admin\AdminCareerController;
use App\Http\Controllers\Admin\AdminMessageController;
use App\Http\Controllers\Admin\AdminSettingController;
use App\Http\Controllers\Admin\AdminPageController;

// Public Pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-group', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');

// Projects (Portfolio)
Route::get('/projects', [ProjectController::class, 'index'])->name('projects');
Route::get('/projects/{slug}', [ProjectController::class, 'show'])->name('project.details');

// News (Notícias)
Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/news/{slug}', [NewsController::class, 'show'])->name('news.details');

// Contact Form
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Business Areas
Route::get('/enviro', [PageController::class, 'enviro'])->name('enviro');
Route::get('/panther-oil', [PageController::class, 'pantherOil'])->name('panther-oil');
Route::get('/panther-mat', [PageController::class, 'pantherMat'])->name('panther-mat');
Route::get('/panther-build', [PageController::class, 'pantherBuild'])->name('panther-build');

// Institutional Pages
Route::get('/certificacoes', [PageController::class, 'certifications'])->name('certifications');
Route::get('/sustentabilidade', [PageController::class, 'sustainability'])->name('sustainability');
Route::get('/politica-de-privacidade', [PageController::class, 'privacy'])->name('privacy');

// Careers (Recrutamento)
Route::get('/carreiras', [CareerController::class, 'index'])->name('careers');
Route::post('/carreiras/candidatar', [CareerController::class, 'apply'])->name('careers.apply');

// Admin panel custom authentication
Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('login');
    Route::get('/admin/login', [AdminAuthController::class, 'showLogin'])->name('admin.login');
    Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
});

// Admin panel secure routes
Route::middleware('auth', 'is_admin')->prefix('admin')->name('admin.')->group(function () {
    // Logout
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('logout');

    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    // Resources
    Route::resource('projects', AdminProjectController::class)->except(['show']);
    Route::resource('news', AdminNewsController::class);
    Route::resource('careers', AdminCareerController::class)->except(['show']);

    // Applications management
    Route::get('applications', [AdminCareerController::class, 'applications'])->name('applications.index');
    Route::get('applications/{id}', [AdminCareerController::class, 'showApplication'])->name('applications.show');
    Route::get('applications/{id}/download-cv', [AdminCareerController::class, 'downloadCv'])->name('applications.download-cv');
    Route::delete('applications/{id}', [AdminCareerController::class, 'destroyApplication'])->name('applications.destroy');

    // Contact messages inbox
    Route::get('messages', [AdminMessageController::class, 'index'])->name('messages.index');
    Route::get('messages/{id}', [AdminMessageController::class, 'show'])->name('messages.show');
    Route::delete('messages/{id}', [AdminMessageController::class, 'destroy'])->name('messages.destroy');

    // Global settings
    Route::get('settings', [AdminSettingController::class, 'index'])->name('settings.index');
    Route::post('settings', [AdminSettingController::class, 'update'])->name('settings.update');

    // Pages content management
    Route::get('pages', [AdminPageController::class, 'index'])->name('pages.index');
    Route::get('pages/{page_key}/edit', [AdminPageController::class, 'edit'])->name('pages.edit');
    Route::post('pages/{page_key}', [AdminPageController::class, 'update'])->name('pages.update');
});
