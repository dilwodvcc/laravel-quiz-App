<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home()
    {
        return view('dashboard.home');
    }
    public function quizzes()
    {
        return view('dashboard.quizzes');
    }

    public function statistics()
    {
        return view('dashboard.statistics');
    }
}
