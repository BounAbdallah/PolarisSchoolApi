<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EtudiantController;

Route::group(['middleware' => 'api'], function ($router) {
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
    Route::get('etudiants', [EtudiantController::class, 'index']);
    Route::post('add/etudiant', [EtudiantController::class, 'store']);
    Route::get('detail/{etudiant}', [EtudiantController::class, 'show']);
    Route::put('update/{etudiant}', [EtudiantController::class, 'update']);
    Route::post('delete/{etudiant}', [EtudiantController::class, 'destroy']);
    
    Route::get('etudiants/trashed', [EtudiantController::class, 'trashed']);
    Route::post('etudiants/restore/{id}', [EtudiantController::class, 'restore']);
    Route::delete('etudiants/force-delete/{id}', [EtudiantController::class, 'forceDelete']);
});
