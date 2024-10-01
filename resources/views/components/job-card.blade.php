<div class="p-4 bg-white/5 rounded-xl flex flex-col text-center border border-white/5 hover:border-blue-300/50 transition-all duration-300 group job-card cursor-pointer"
    data-url="{{ route('position.show' ,  $job->id) }}">
    <div class="self-start text-sm border-b-2 border-white/10 group-hover:border-blue-300 cursor-default transition-all duration-500">
        <a href="{{ route('employer.show' , $job->employer->id) }}">{{ $job->employer->name }}</a>
    </div>

    <div class="py-8">
        <h3 class="font-bold group-hover:text-blue-500 transition-all duration-300">
            {{ $job->title }}
        </h3>
        <p class="text-sm mt-4">{{ $job->location }} - From {{ $job->salary }}</p>
    </div>

    <div class="flex justify-between items-center mt-auto">
        <div>
            @foreach ($job->tags as $tag)
                <x-tag href="{{ route('tag.show' , [$tag]) }}">{{ $tag->name }}</x-tag>
            @endforeach
        </div>
        <div>
            <x-employer-logo :width="42" />
        </div>
    </div>
</div>
