<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h2 class="text-3xl font-bold text-center text-white mb-12">Browse All Remote Jobs</h2>

    <div class="space-y-6">
        @foreach($jobs as $job)

            <x-job-card-wide :$job />

        @endforeach
    </div>

    <div>{{$jobs->links()}}</div>
</x-layout>
