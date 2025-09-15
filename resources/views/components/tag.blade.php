@props(['tag'])
<a href="/tags/{{$tag->name}}">
    <span class="inline-block bg-slate-700 text-slate-300 text-xs font-medium px-2.5 py-0.5 rounded-full mb-2">{{$tag->name}}</span>
</a>
