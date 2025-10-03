<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

<ul>
    @foreach ($jobs as $job)
        <li>
            <a href="/job/{{ $job['id'] }}" class="text-blue-500 hover:underline">
                {{ $job['title'] }} - ${{ number_format($job['salary']) }}
            </a>
        </li>
    @endforeach
</ul>

</x-layout>