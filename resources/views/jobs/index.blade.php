<x-layout>
    <x-slot:heading>
        Job Page
    </x-slot:heading>

    <div class="max-w-6xl mx-auto px-4 py-8">
        <!-- Header -->
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-3xl font-bold text-gray-900">Available Jobs</h1>
            <a href="{{ route('jobs.create') }}"
               class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-indigo-500 focus:ring-2 focus:ring-indigo-600 focus:ring-offset-2">
                + Post Job
            </a>
        </div>

        <!-- Jobs Grid -->
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($jobs as $job)
                <a href="/jobs/{{ $job->id }}"
                   class="block bg-white border border-gray-200 rounded-xl p-6 shadow-sm hover:shadow-lg transition duration-200 hover:-translate-y-1">
                    <!-- Employer -->
                    <div class="text-indigo-600 text-sm font-semibold mb-1">
                        {{ $job->employer->name ?? 'Unknown Employer' }}
                    </div>

                    <!-- Job Title -->
                    <h2 class="text-lg font-bold text-gray-900 mb-2">
                        {{ $job->title }}
                    </h2>

                    <!-- Salary -->
                    <p class="text-gray-600 text-sm mb-4">
                        💼 Pays <span class="font-medium text-gray-800">{{ $job->salary }}</span> per year
                    </p>

                    <!-- Tags -->
                    <div class="flex flex-wrap gap-2">
                        @forelse ($job->tags as $tag)
                            <span class="inline-flex items-center bg-indigo-50 text-indigo-700 text-xs font-medium px-2.5 py-1 rounded-full">
                                #{{ $tag->name }}
                            </span>
                        @empty
                            <span class="text-xs text-gray-400 italic">No tags</span>
                        @endforelse
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-10">
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
