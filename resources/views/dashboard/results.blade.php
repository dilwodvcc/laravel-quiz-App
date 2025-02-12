@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Quiz Results: {{ $quiz->title }}</h2>

        <div class="bg-white p-6 rounded-lg shadow-md">
            <p class="text-gray-600">Total Questions: {{ $quiz->questions_count }}</p>
            <p class="text-gray-600">Completion Rate: 75%</p>

            <a href="{{ route('dashboard') }}" class="mt-4 inline-block bg-blue-600 text-white px-4 py-2 rounded-lg">
                Back to Dashboard
            </a>
        </div>
    </div>
@endsection
