<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompetitionController;
use App\Http\Controllers\ParticipantController;
use App\Http\Controllers\ResultController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/about', function () {
    return view('about');
});

//Competitions
Route::get('/IUPCompeList', [CompetitionController::class,'index'])
    ->middleware(['auth', 'verified'])->name('IUPCompeList');
Route::get('/IUPCompeList/Add', [CompetitionController::class,'add'])
    ->middleware(['auth', 'verified'])->name('IUPCompeList.Add');
Route::post('/IUPCompeList/AddComplete', [CompetitionController::class,'addComplete'])
    ->middleware(['auth', 'verified'])->name('IUPCompeList.AddComplete');
Route::get('/IUPCompeList/Update/{id}', [CompetitionController::class,'update'])
    ->middleware(['auth', 'verified'])->name('IUPCompeList.Update');
Route::put('/IUPCompeList/{id}', [CompetitionController::class,'updateComplete'])
    ->middleware(['auth', 'verified'])->name('IUPCompeList.UpdateComplete');
Route::delete('/IUPCompeList/{id}', [CompetitionController::class,'delete'])
    ->middleware(['auth', 'verified'])->name('IUPCompeList.Delete');

//Participants
Route::get('/IUPParticipantList', [ParticipantController::class,'index'])
    ->middleware(['auth', 'verified'])->name('IUPParticipantList');
Route::get('/IUPParticipantList/Add', [ParticipantController::class,'add'])
    ->middleware(['auth', 'verified'])->name('IUPParticipantList.Add');
Route::post('/IUPParticipantList/AddComplete', [ParticipantController::class,'addComplete'])
    ->middleware(['auth', 'verified'])->name('IUPParticipantList.AddComplete');
Route::get('/IUPParticipantList/Update/{id}', [ParticipantController::class,'update'])
    ->middleware(['auth', 'verified'])->name('IUPParticipantList.Update');
Route::put('/IUPParticipantList/{id}', [ParticipantController::class,'updateComplete'])
    ->middleware(['auth', 'verified'])->name('IUPParticipantList.UpdateComplete');
Route::delete('/IUPParticipantList/{id}', [ParticipantController::class,'delete'])
    ->middleware(['auth', 'verified'])->name('IUPParticipantList.Delete');

//Result
Route::get('/IUPResultList', [ResultController::class,'index'])
    ->middleware(['auth', 'verified'])->name('IUPResultList');
Route::get('/IUPResultList/Add', [ResultController::class,'add'])
    ->middleware(['auth', 'verified'])->name('IUPResultList.Add');
Route::post('/IUPResultList/AddComplete', [ResultController::class,'addComplete'])
    ->middleware(['auth', 'verified'])->name('IUPResultList.AddComplete');
Route::delete('/IUPResultList/{id}', [ResultController::class,'delete'])
    ->middleware(['auth', 'verified'])->name('IUPResultList.Delete');

require __DIR__.'/auth.php';
