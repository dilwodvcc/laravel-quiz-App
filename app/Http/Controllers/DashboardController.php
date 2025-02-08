<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('dashboard/home');
    }
    public function myQuizzes()
    {
        return view('dashboard/my-quizzes');
    }
    public function quizzes()
    {
        return view('dashboard/quizzes');
    }
    public function createQuiz()
    {
        return view('dashboard/create-quiz');
    }
    public function updateQuiz()
    {
        return view('dashboard/update-quiz');
    }
    public function statistics()
    {
        return view('dashboard/statistics');
    }
}
