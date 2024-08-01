<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <p>
        This job pay {{ $job['salary'] }} per year.
    </p>

    <p class="mt-6" href="">
        <x-button href="/jobs/{{ $job->id }}/edit">
            Edit
        </x-button>
    </p>
</x-layout>
