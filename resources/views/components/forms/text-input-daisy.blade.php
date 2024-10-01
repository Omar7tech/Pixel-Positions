@props(['type' => 'text', 'placeholder' => '', 'name'])

@php
    $errorMessage = session('errors') ? session('errors')->first($name) : null;
@endphp

<div>
    {{-- Input Wrapper with Error State --}}
    <label class="input input-bordered flex items-center gap-2 {{ $errorMessage ? 'input-error' : '' }}">
        {{-- Conditional Icon for Email and Password Types --}}
        @if ($type == 'email')
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                <path
                    d="M2.5 3A1.5 1.5 0 0 0 1 4.5v.793c.026.009.051.02.076.032L7.674 8.51c.206.1.446.1.652 0l6.598-3.185A.755.755 0 0 1 15 5.293V4.5A1.5 1.5 0 0 0 13.5 3h-11Z" />
                <path
                    d="M15 6.954 8.978 9.86a2.25 2.25 0 0 1-1.956 0L1 6.954V11.5A1.5 1.5 0 0 0 2.5 13h11a1.5 1.5 0 0 0 1.5-1.5V6.954Z" />
            </svg>
        @elseif ($type == 'password')
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                <path fill-rule="evenodd"
                    d="M8 1a3 3 0 0 0-3 3v2h-.5A1.5 1.5 0 0 0 3 7.5v6A1.5 1.5 0 0 0 4.5 15h7A1.5 1.5 0 0 0 13 13.5v-6A1.5 1.5 0 0 0 11.5 6H11V4a3 3 0 0 0-3-3zm-1 5V4a1 1 0 0 1 2 0v2H7zm-2.5 1H11.5v6h-7v-6z" />
            </svg>
        @else
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="h-4 w-4 opacity-70">
                <circle cx="8" cy="8" r="6" />
            </svg>
        @endif

        {{-- Input Field --}}
        <input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}"
            class="input w-full" />
    </label>

    <div class="float-start">
        @if ($errorMessage)
            <span class="text-error">{{ $errorMessage }}</span>
        @endif
    </div>
    {{-- Display Validation Error Message --}}

</div>
