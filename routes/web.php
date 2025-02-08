<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'welcome'])->name('welcome');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/how-it-works', [HomeController::class, 'howItWorks'])->name('howItWorks');

Route::get('/take-quiz', [QuizController::class, 'takeQuiz'])->middleware('auth')->name('takeQuiz');

Route::get('/dashboard', [DashboardController::class,'home'])->name('home');
Route::get('/my-quizzes'  , [DashboardController::class,'myQuizzes'])->name('quizzes');
Route::get('/create-quiz',[DashboardController::class,'createQuiz'])->name('createQuiz');
Route::get('/statistics',[DashboardController::class,'statistics'])->name('statistics');
Route::get('/update-quiz',[DashboardController::class,'updateQuiz'])->name('updateQuiz');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
