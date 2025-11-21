<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/project/{slug}', [HomeController::class, 'show'])
->name('project.show');
Route::get('/projects', [HomeController::class, 'archive'])->name('projects.archive');
Route::post('/guestbook', [HomeController::class, 'storeGuestbook'])->name('guestbook.store');