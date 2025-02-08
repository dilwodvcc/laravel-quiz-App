<x-main.header></x-main.header>
<body class="bg-gradient-to-b from-blue-50 to-indigo-100 min-h-screen flex flex-col">
<!-- Navbar -->
<x-main.navbar></x-main.navbar>

    <!-- Hero Section -->
<header class="flex-grow flex items-center justify-center bg-gradient-to-b from-white via-indigo-50 to-indigo-100 py-32">
    <div class="text-center">
        <h1 class="text-5xl font-extrabold text-gray-800 sm:text-6xl">
            <span>Build and Share</span>
            <span class="block text-indigo-600">Interactive Quizzes</span>
        </h1>
        <p class="mt-4 text-lg text-gray-600 max-w-2xl mx-auto">
            Engage your audience with fun quizzes, share knowledge, and track progress.
            Perfect for educators, trainers, and curious learners.
        </p>
        <div class="mt-8 space-y-3 sm:space-y-0 sm:flex sm:justify-center sm:space-x-4">
            <a href="/login"
               class="inline-block px-6 py-3 text-lg font-medium text-white bg-indigo-600 rounded-lg shadow-lg hover:bg-indigo-700">
                Create Your Quiz
            </a>
            <a href="/how-it-works"
               class="inline-block px-6 py-3 text-lg font-medium text-indigo-600 bg-white border border-indigo-600 rounded-lg shadow-lg hover:bg-gray-50">
                Learn More
            </a>
        </div>
    </div>
</header>

<!-- Features Section -->
<section id="features" class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Amazing Features</h2>
        <p class="mt-4 text-lg text-gray-600">Discover the benefits of using our platform to create and share quizzes
            effortlessly.</p>
        <div class="mt-10 grid gap-8 md:grid-cols-3">
            <div class="p-6 bg-indigo-50 rounded-lg shadow hover:shadow-lg">
                <h3 class="text-xl font-bold text-indigo-700">Easy to Use</h3>
                <p class="mt-2 text-gray-600">Build quizzes in minutes with our simple interface.</p>
            </div>
            <div class="p-6 bg-indigo-50 rounded-lg shadow hover:shadow-lg">
                <h3 class="text-xl font-bold text-indigo-700">Track Progress</h3>
                <p class="mt-2 text-gray-600">Analyze results to understand your learners better.</p>
            </div>
            <div class="p-6 bg-indigo-50 rounded-lg shadow hover:shadow-lg">
                <h3 class="text-xl font-bold text-indigo-700">Customizable</h3>
                <p class="mt-2 text-gray-600">Personalize quizzes to suit your audience.</p>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<x-main.footer></x-main.footer>
