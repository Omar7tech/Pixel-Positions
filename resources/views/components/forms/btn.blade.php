@props(['type' => 'submit'])


<button type="{{ $type }}"
    class="btn btn-wide @if ($type == 'submit') btn-primary @endif">{{ $slot }}</button>
