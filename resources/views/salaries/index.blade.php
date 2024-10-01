<x-layout>
    <section>

        <div class="flex justify-center space-x-4">
            @php
                $low_active = request()->get('sort') == 'asc';
                $high_active = !$low_active; // Invert the value for high_active
            @endphp

            <x-nav-link2 url="{{ route('salaries.index', ['sort' => 'asc']) }}" :active="$low_active">
                Lowest
            </x-nav-link2>

            <x-nav-link2 url="{{ route('salaries.index', ['sort' => 'desc']) }}" :active="$high_active">
                Highest
            </x-nav-link2>
        </div>



        <div class="mt-6 space-y-3">
            @foreach ($positions as $job)
                <x-job-card-wide :job="$job" />
            @endforeach
        </div>
    </section>
</x-layout>
