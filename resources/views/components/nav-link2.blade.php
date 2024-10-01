@props(['active' => false , 'url' => '/'])
<a href="{{ $url }}" class="hover:text-gray-300 cursor-pointer hover:border-b-2 border-blue-700 transition-all duration-100  @if ($active == true) border-b-2 border-blue-700 @endif">{{ $slot }}</a>
