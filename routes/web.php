<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', App\Livewire\Profile\Index::class)->name('profile.edit');
});

require __DIR__ . '/auth.php';

//Route Hooks - Do not delete//
	Route::get('project-teams', App\Livewire\ProjectTeams\Index::class)->name('project-teams.index')->middleware('auth');
	Route::get('checklist-items', App\Livewire\ChecklistItems\Index::class)->name('checklist-items.index')->middleware('auth');
	Route::get('files', App\Livewire\Files\Index::class)->name('files.index')->middleware('auth');
	Route::get('notes', App\Livewire\Notes\Index::class)->name('notes.index')->middleware('auth');
	Route::get('reminders', App\Livewire\Reminders\Index::class)->name('reminders.index')->middleware('auth');
	Route::get('routines', App\Livewire\Routines\Index::class)->name('routines.index')->middleware('auth');
	Route::get('tasks', App\Livewire\Tasks\Index::class)->name('tasks.index')->middleware('auth');
	Route::get('projects', App\Livewire\Projects\Index::class)->name('projects.index')->middleware('auth');