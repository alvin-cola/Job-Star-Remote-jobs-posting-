@props(['job'])
<!-- Job Card 1 -->
        <div class="bg-slate-800 rounded-xl p-6 shadow-lg border border-slate-700 hover:border-teal-500 transition-colors duration-200 group">
            <div class="flex items-center mb-4">
                <img src="{{asset('images/Job star.png ')}}" alt="Default Logo" class="rounded-full mr-4 w-10 h-9"/>
                <div>
                    <h3 class="text-xl font-bold text-white group-hover:text-teal-500 transition-colors duration-200">{{$job->Title}}</h3>
                    <p class="text-slate-400">{{$job->employer->name}}</p>
                </div>
            </div>
            <p class="text-slate-300 mb-4">{{$job->Description}}</p>
            <div class="flex justify-between">
                <div>
                    @foreach($job->tags as $tag)
                        <x-tag :tag="$tag" />
                    @endforeach

                </div>
                <div>
                    <x-button href="{{$job->Url}}" class="rounded-full px-4 py-2 text-sm font-semibold text-white group-hover:bg-teal-600 transition-colors duration-200">Apply</x-button>
                </div>
            </div>

        </div>


