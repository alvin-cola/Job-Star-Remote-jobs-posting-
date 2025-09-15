<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>
    <h1>Hello this is the jobs page</h1>

    <h2>
        <strong>{{$job->Title}}</strong>
    </h2>
    <p>
        This job pays a salary of {{$job->Salary}}
    </p>
    <div class="mt-10">
        @can('edit',$job)
        <x-button href="/jobs/{{$job->id}}/edit">Edit job</x-button>
        @endcan
    </div>
</x-layout>
