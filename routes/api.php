<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/folders', [FolderController::class, 'index']);
Route::get('/folders/{folder}', [FolderController::class, 'show']);
Route::get('/folders/{folder}/quizzes', [FolderController::class, 'quizzes']);
Route::get('/quizzes/{quiz}', [QuizController::class, 'show']);
Route::get('/quizzes/{quiz}/questions', [QuizController::class, 'questions']);
Route::get('/questions/{question}', [QuestionController::class, 'show']);
Route::post('/folders', [FolderController::class, 'store']);
Route::post('/folders/{folder}/quizzes', [FolderController::class, 'storeQuiz']);
Route::post('/quizzes/{quiz}/questions', [QuizController::class, 'storeQuestion']);
