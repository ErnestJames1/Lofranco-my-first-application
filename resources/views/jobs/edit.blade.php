<x-layout>
    <x-slot:heading>
        Edit Job
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}" class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Edit Job Details</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">
                    Update the job information below.
                </p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                    <!-- Job Title -->
                    <div class="sm:col-span-4">
                        <label for="title" class="block text-sm font-medium leading-6 text-gray-900">
                            Title
                        </label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 
                                       focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input
                                    type="text"
                                    name="title"
                                    id="title"
                                    value="{{ old('title', $job->title) }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 
                                           placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    required
                                >
                            </div>
                            @error('title')
                                <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <!-- Salary -->
                    <div class="sm:col-span-4">
                        <label for="salary" class="block text-sm font-medium leading-6 text-gray-900">
                            Salary
                        </label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 
                                       focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                <input
                                    type="text"
                                    name="salary"
                                    id="salary"
                                    value="{{ old('salary', $job->salary) }}"
                                    class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 
                                           placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6"
                                    required
                                >
                            </div>
                            @error('salary')
                                <p class="text-xs text-red-500 font-semibold mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Buttons -->
        <div class="mt-6 flex items-center justify-between gap-x-6">
            <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold leading-6 text-gray-900 hover:text-indigo-600">
                Cancel
            </a>

            <div class="flex items-center gap-x-4">
                <!-- Delete button -->
                <button form="delete-form" type="submit" class="text-sm font-semibold text-red-600 hover:text-red-500">
                    Delete
                </button>

                <!-- Update button -->
                <button
                    type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm 
                           hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 
                           focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                >
                    Update
                </button>
            </div>
        </div>
    </form>

    <!-- Hidden delete form -->
    <form method="POST" action="/jobs/{{ $job->id }}" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
