<?php

use App\Http\Controllers\categoryController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('wellcome');
});

Route::get('/categories', [categoryController::class, 'categories'])->name('categories');
Route::get('/category/create', [categoryController::class, 'categoryCreate'])->name('category.create');



Route::get('/skills', [SkillController::class, 'skills'])->name('skills.index');  // List of all skills
Route::get('/skills/create', [SkillController::class, 'skillCreate'])->name('skills.create'); // Create a new skill

Route::get('/skill/store', [SkillController::class, 'skillStore'])->name('skill.store');


