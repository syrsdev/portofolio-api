<?php

use App\Http\Controllers\about\AboutController;
use App\Http\Controllers\contacts\ContactController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\home\RecentProjectsController;
use App\Http\Controllers\home\SkillController;
use App\Http\Controllers\projects\AllProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/home/recent-projects', [RecentProjectsController::class, 'index'])->name('home.recent-projects');
Route::get('/home/skills', [SkillController::class, 'index'])->name('home.skills');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/projects', [AllProjectController::class, 'index'])->name('projects');
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
Route::get('/footer', [FooterController::class, 'index'])->name('footer');