<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\EtudiantController;

Route::group(['middleware' => 'api'], function () {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
    Route::get('etudiants', [EtudiantController::class, 'index']);
    Route::post('add/etudiant', [EtudiantController::class, 'store']);
    Route::get('detail/{etudiant}', [EtudiantController::class, 'show']);
});

Route::group(['middleware' => ['api', 'auth']], function () {
    Route::get('etudiants/trashed', [EtudiantController::class, 'trashed']);
    Route::put('update/{etudiant}', [EtudiantController::class, 'update']);
    Route::post('delete/{etudiant}', [EtudiantController::class, 'destroy']);
    Route::post('etudiants/restore/{id}', [EtudiantController::class, 'restore']);
    Route::delete('etudiants/force-delete/{id}', [EtudiantController::class, 'forceDelete']);
});


Route::group(['middleware' => 'api'], function () {
    Route::get('matieres', [MatiereController::class, 'index']);
    Route::post('add/matieres', [MatiereController::class, 'store']);
    Route::get('matieres/{matiere}', [MatiereController::class, 'show']);
    Route::put('matieres/{matiere}', [MatiereController::class, 'update']);
    Route::delete('matieres/{matiere}', [MatiereController::class, 'destroy']);
});