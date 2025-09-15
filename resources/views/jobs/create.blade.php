 <x-layout>
    <x-slot:heading>
        Create a new job
      </x-slot:heading>
    <h1> Add a new job</h1>

    <form method="POST" action="/jobs" enctype="multipart/form-data">
        @csrf
        <div class="space-y-12  ">


            <div class="border-b border-gray-900/10 pb-12">
                <h2 class="text-base/7 font-semibold text-white-900">Job  Information</h2>
                <div class="mt-10 space-y-8">
                    <div class="sm:col-span-3">
                        <label for="title" class="block text-sm/6 font-medium text-white-900">Title</label>
                        <div class="mt-2">
                            <input id="title"  type="text" name="title" placeholder="Web developer" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 rounded" />
                            @error('title')
                            <p class="text-red-500 mt-2 text-xs font-semibold"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="salary" class="block text-sm/6 font-medium text-white-900">Description</label>
                        <div class="mt-2">
                            <input id="description" type="text" name="description" placeholder="This job requires....." class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 rounded border border-grey  " />
                            @error('description')
                            <p class="text-red-500 mt-2 text-xs font-semibold"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="employer-name" class="block text-sm/6 font-medium text-white-900">Company Name</label>
                        <div class="mt-2">
                            <input id="employer-name" type="text" name="employer-name" placeholder="Viny tech solutions" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 rounded border border-grey " />
                            @error('employer-name')
                            <p class="text-red-500 mt-2 text-xs font-semibold"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>
{{--                    <div class="sm:col-span-3">--}}
{{--                        <label for="logo" class="block text-sm/6 font-medium text-white-900">Company logo</label>--}}
{{--                        <div class="mt-2">--}}
{{--                            <input id="logo" type="file" name="logo"  class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 rounded border border-grey " />--}}
{{--                            @error('logo')--}}
{{--                            <p class="text-red-500 mt-2 text-xs font-semibold"> {{$message}}</p>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
                    </div>
                    <div class="sm:col-span-3">
                        <label for="location" class="block text-sm/6 font-medium text-white-900">Job location</label>
                        <div class="mt-2">
                            <input id="location" type="text" name="location" placeholder="Viny tech solutions" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 rounded border border-grey " />
                            @error('location')
                            <p class="text-red-500 mt-2 text-xs font-semibold"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="type" class="block text-sm/6 font-medium text-white-900">Job Type</label>
                        <div class="mt-2">
                            <select class="text-black" name="type">
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                            </select>
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="url" class="block text-sm/6 font-medium text-white-900">Job Url</label>
                        <div class="mt-2">
                            <input id="url" type="text" name="url" placeholder="https://example.com/jobs/123" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 rounded border border-grey " />
                            @error('url')
                            <p class="text-red-500 mt-2 text-xs font-semibold"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="featured" class="block text-sm/6 font-medium text-white-900">Featured</label>
                        <div class="mt-2  ">
                            <input type="hidden" name="featured" value="0">
                            <input id="featured" type="checkbox" name="featured" value="1" placeholder="Enter¨1¨ if featured or ¨0¨ if scheduled" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 rounded border border-grey " />
                            <p>Tik if featured</p>
                            @error('featured')
                            <p class="text-red-500 mt-2 text-xs font-semibold"> {{$message}}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label for="tags" class="block text-sm/6 font-medium text-white-900">Tags(comma seperated)</label>
                        <div class="mt-2">
                            <input id="tags" type="text" name="tags" placeholder="Marketing,Dev,Frontend,Web 3,Back end" class="block min-w-0 grow bg-white py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 rounded border border-grey " />
                            @error('tags')
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


        <div class="mt-6 mr-40 flex items-center justify-end gap-x-6 mb-8">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Publish</button>
        </div>
    </form>

</x-layout>
