<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>

    <p>
        This job pays ${{ number_format($job->salary, 2, '.', ',') }} per year.
    </p>
</x-layout>
