@props(['job',])
<div class="bg-slate-800 rounded-xl p-6 shadow-lg hover:border-teal-500 transition-colors duration-200 group border border-slate-700 gap-x-6 flex">

    <img src="/public/images/Job-star.png" alt="Default Logo" class="rounded-full mr-4 w-10 h-9"/>

    <div class="flex-1 space-y-4">

        <a class="self-start text-xs text-gray-500 ">{{$job->employer->name}}</a>
        <h3 class="font-bold text-xl group-hover:text-teal-500 transition-colors duration-200">{{$job->Title}}</h3>
        <p class="text-slate-300 mb-4">{{$job->Description}}</p>
        <div class="flex justify-between">
            <p class="self-start text-xs text-gray-200 ">{{$job->JobType}}</p>
            <div>
                <x-button href="{{$job->Url}}" class="rounded-full px-4 py-2 text-sm font-semibold text-white group-hover:bg-teal-600 transition-colors duration-200">Apply</x-button>
            </div>
        </div>

    </div>
    <div class="flex-col justify-between">
        <div>
            @foreach($job->tags as $tag)
                <x-tag :tag="$tag" />
            @endforeach

        </div>



    </div>

</div>

