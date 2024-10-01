@props(['job' , "tag"])

<div
    class="job-card p-4 bg-white/5 rounded-xl flex flex-col sm:flex-row gap-6 border border-white/10 hover:border-blue-600 transition-all duration-200 hover:transform hover:scale-105 hover:bg-white/10 group cursor-pointer"  data-url="{{ route('position.show' ,  $job->id) }}">
    <div class="flex-shrink-0">
        <x-employer-logo :width="90" />
    </div>

    <div class="flex-1 flex flex-col">
        <a href="{{ route('employer.show', $job->employer->id) }}" class="text-sm text-gray-400 group-hover:text-blue-300">
            {{ $job->employer->name }}
        </a>
        <h3 class="font-bold mt-3 text-xl">{{ $job->title }}</h3>
        <p class="text-sm text-gray-400 mt-auto">
            {{ $job->location }} - From <span class="{{ request()->is('salaries') ? 'text-l font-bold text-green-500' : '' }} ">{{number_format( $job->salary )}} $</span>
        </p>
    </div>

    <div class="flex flex-wrap gap-2 items-start sm:items-end">
        @foreach ($job->tags as $tag)
            <x-tag href="{{route('tag.show' , $tag->id)  }}">{{ $tag->name }}</x-tag>
        @endforeach
    </div>
</div>
