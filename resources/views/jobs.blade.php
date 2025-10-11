<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

<ul>
    @foreach ($jobs as $job)
        <li>
            <a href="/job/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg hover:bg-gray-50">
                    <div class="font-bold text-blue-500 text-sm">
                        {{ $job->employer->name }}
                    </div>
                    <div>
                        <strong class="text-laracasts">{{ $job['title'] }}</strong> — Pays {{ $job['salary'] }} per year.
                    </div>

                    <div class="mt-3">
                        @foreach ($job->tags as $tag)
                            <span class="bg-gray-200 text-gray-700 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded-full">
                                {{ $tag->name }}
                            </span>
                        @endforeach
                    </div>
                </a>
        </li>
    @endforeach
</ul>

</x-layout>