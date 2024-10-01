@props(["tag"])

<a href="/tag/{{$tag->id}}" class="bg-white/10 hover:bg-blue-500/25 px-3 py-1 rounded-xl text-sm transition-colors duration-300">{{ $tag->name }}</a>
