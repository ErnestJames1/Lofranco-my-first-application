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
            <div class="space-x-4">
                {{-- <a href="/" class="text-gray-700 hover:text-indigo-600">Home</a>
                <a href="/about" class="text-gray-700 hover:text-indigo-600">About</a>
                <a href="/contact" class="text-gray-700 hover:text-indigo-600">Contact</a> --}}
                <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                {{-- <x-nav-link href="/job" :active="request()->is('job')">Job</x-nav-link> --}}
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
