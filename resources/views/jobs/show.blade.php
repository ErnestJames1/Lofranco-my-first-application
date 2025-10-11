<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <p class="text-sm text-gray-500">{{ $job->employer->name }}</p>
    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>This job pays {{ $job['salary'] }} per year.</p>

    <div class="mt-6 flex items-center gap-x-4">
        <!-- Back button -->
        <a href="/jobs" 
           class="text-sm font-semibold text-gray-600 hover:text-indigo-600">
           ← Back to Jobs
        </a>

        <!-- ✏️ Edit button -->
        <a href="/jobs/{{ $job->id }}/edit" 
           class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm 
                  hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 
                  focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
           Edit Job
        </a>
    </div>
</x-layout>
