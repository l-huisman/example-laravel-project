<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <h2>{{$job->title}}</h2>

    <p>
        This job pays &euro;{{ $job->salary }} per year!
    </p>

    @can('edit', $job)
    <p class="mt-6">
        <x-button href="/jobs/{{ $job->id }}/edit">Edit Job</x-button>
    </p>
    @endcan
</x-layout>
