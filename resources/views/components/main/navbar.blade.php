<nav class="bg-white shadow-lg">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <a href="/"><h1 class="text-2xl font-bold text-indigo-600">Quiz App</h1></a>
            </div>
            <div class="flex items-center space-x-4">
                <div class=" md:flex items-center space-x-4">
                    <a href="{{route("about")}}" class="text-gray-600 hover:text-gray-900">About</a>
                    <a href="{{route("features")}}" class="text-gray-600 hover:text-gray-900">Features</a>
                    <a href="{{route("how-it-works")}}" class="text-gray-600 hover:text-gray-900">How It Works</a>
                    <a href="{{route("login")}}" class="text-gray-600 hover:text-gray-900">Login</a>
                    <a href="{{route("register")}}"
                       class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
                        Register
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class=" mobile-menu md:hidden pl-3">
        <a href="{{route("features")}}" class="block my-2 text-xl text-gray-600 hover:text-gray-900">Features</a>
        <a href="{{route("how-it-works")}}" class="block my-2 text-xl text-gray-600 hover:text-gray-900">How It Works</a>
        <a href="{{route("login")}}" class="block my-2 text-xl text-gray-600 hover:text-gray-900">Login</a>
        <a href="{{route("register")}}"
           class="block my-2 text-xl items-center px-4 py-2 border border-transparent font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700">
            Register
        </a>
    </div>
</nav>
