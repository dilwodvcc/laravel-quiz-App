<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/how-it-works', [HomeController::class, 'howItWorks'])->name('how-it-works');
Route::get('/features', [HomeController::class, 'features'])->name('features');

Route::get('/take-quiz', [QuizController::class, 'takeQuiz'])->middleware('auth')->name('take-quiz');

Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class,'home'])->name('dashboard');
    Route::get('/quizzes'  , [QuizController::class,'index'])->name('my-quizzes');
    Route::get('/quizzes/{quiz}'  , [QuizController::class,'edit'])->name('edit-quiz');
    Route::post('/quizzes/{quiz}/update'  , [QuizController::class,'update'])->name('update-quiz');
    Route::delete('/quizzes/{quiz}', [QuizController::class, 'destroy'])->name('destroy-quiz');
    Route::get('/quizzes/{quiz}/results', [QuizController::class, 'results'])->name('results-quiz');


    Route::get('/statistics',[DashboardController::class,'statistics'])->name('statistics');

    Route::get('/create-quiz',[QuizController::class,'create'])->name('create-quiz');
    Route::post('/create-quiz',[QuizController::class,'store'])->name('store-quiz');
});


//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
