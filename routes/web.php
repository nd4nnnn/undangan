<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RsvpController;

// Route Undangan
Route::get('/', [RsvpController::class, 'index']);
Route::post('/rsvp', [RsvpController::class, 'store'])->name('rsvp.store');

// Route Admin Generator
Route::get('/admin/generator', [RsvpController::class, 'generator'])->name('admin.generator');
Route::post('/admin/generator', [RsvpController::class, 'generateProcess'])->name('admin.generate.process');
