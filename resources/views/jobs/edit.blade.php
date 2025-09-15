<x-layout>
    <x-slot:heading>
        Create a new job
    </x-slot:heading>
    <h1> Add a new job</h1>

    <form method="POST" action="/jobs/{{$job->id}}">
        @csrf
        @method('patch')

        <div class="space-y-12">


            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-gray-900">Job  Information</h2>
                <div class="mt-10">
                    <div class="sm:col-span-3">
                        <label for="title" class="block text-sm/6 font-medium text-gray-900">Title</label>
                        <div class="mt-2">
                            <input id="title" type="text" name="title" placeholder="Web developer" value="{{$job->Title}}" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 rounded" />                            @error('title')
                            <p class="text-red-500 mt-2 text-xs font-semibold"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="salary" class="block text-sm/6 font-medium text-gray-900">Salary</label>
                        <div class="mt-2">
                            <input id="salary" type="text" name="salary" placeholder="$50,000 USD" value="{{$job->Salary}}" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 rounded border border-grey " />                            @error('salary')
                            <p class="text-red-500 mt-2 text-xs font-semibold"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>
                </div>

            </div>
            {{--            @if ($errors->any()) @endif--}}
            {{--            @foreach($errors->all() as $error )--}}
            {{--                <ul>--}}
            {{--                    <li>{{$error}}</li>--}}
            {{--                </ul>--}}

            {{--            @endforeach--}}
        </div>


        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div>
                <button form="delete-job" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs  focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Delete</button>
            </div>
            <div>
                <a href="/jobs/{{$job->id}}"  class="text-sm/6 font-semibold text-gray-900">Cancel</a>
                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update</button>
            </div>

        </div>
    </form>
<form method="POST" action="/jobs/{{$job->id}}" id="delete-job">
    @csrf
    @method('delete')

</form>
</x-layout>
