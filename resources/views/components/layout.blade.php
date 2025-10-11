<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $heading ?? 'My App' }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans antialiased">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-indigo-600">{{ $heading }}</h1>

            <div class="flex items-center space-x-4">
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>

                <!-- Create Job Button -->
                <a href="/jobs/create"
                   class="ml-4 rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white 
                          shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 
                          focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    + Create Job
                </a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-10">
        {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-white border-t mt-10 py-4">
        <div class="max-w-7xl mx-auto text-center text-gray-500">
            © {{ date('Y') }} My App. All rights reserved.
        </div>
    </footer>

</body>
</html>
