<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UEController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\EvaluationController;

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
    Route::put('update/matieres/{matiere}', [MatiereController::class, 'update']);
    Route::delete('delete/matieres/{matiere}', [MatiereController::class, 'destroy']);
});





Route::group(['middleware' => ['api']], function () {
    Route::get('ues/trashed', [UEController::class, 'trashed']);
    Route::put('ues/update/{ue}', [UEController::class, 'update']);
    Route::post('ues/delete/{ue}', [UEController::class, 'destroy']);
    Route::post('ues/restore/{id}', [UEController::class, 'restore']);
    Route::delete('ues/force-delete/{id}', [UEController::class, 'forceDelete']);
    Route::get('ues', [UEController::class, 'index']);
    Route::post('add/ues', [UEController::class, 'store']);
    Route::get('details/ues/{ue}', [UEController::class, 'show']);
});





Route::group(['middleware' => ['api', 'auth']], function () {
    Route::get('evaluations/trashed', [EvaluationController::class, 'trashed']);
    Route::put('evaluations/update/{evaluation}', [EvaluationController::class, 'update']);
    Route::post('evaluations/delete/{evaluation}', [EvaluationController::class, 'destroy']);
    Route::post('evaluations/restore/{id}', [EvaluationController::class, 'restore']);
    Route::delete('evaluations/force-delete/{id}', [EvaluationController::class, 'forceDelete']);
    Route::get('evaluations', [EvaluationController::class, 'index']);
    Route::post('add/evaluations', [EvaluationController::class, 'store']);
    Route::get('evaluations/{evaluation}', [EvaluationController::class, 'show']);
});

Route::group(['middleware' => ['api']], function () {
    Route::get('evaluations', [EvaluationController::class, 'index']);
    Route::get('evaluations/{evaluation}', [EvaluationController::class, 'show']);
});