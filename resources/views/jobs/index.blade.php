<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <div class="space-y-4">
        @foreach($jobs as $job)
            <a href="jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg shadow-md">
                <div class="text-blue-500 font-bold text-sm">{{ $job->employer->name }}</div>
                <div>
                    <strong>{{ $job['title'] }}</strong>: Pays: &euro;{{ $job['salary'] }} per year
                </div>
            </a>
        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>
