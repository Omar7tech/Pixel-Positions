<x-layout>
    <div class="space-y-10">

        {{-- Hero Section --}}
        <section class="text-center pt-6">
            <div class="flex items-center justify-center">
                <h1 class="font-bold lg:text-4xl text-xl">
                    {{ $position->title }}
                </h1>

                @if ($position->updated_at != $position->created_at)
                    <div
                        class="ms-3 rounded-md bg-slate-800 py-0.5 px-2.5 border border-transparent text-sm text-white transition-all shadow-sm">
                        Edited
                    </div>
                @endif

            </div>


            <div class="flex w-full flex-col">
                <div class="divider divider-primary font-bold">
                    {{ $position->salary }}
                </div>
            </div>
        </section>

        <section class="mx-7">
            <ul class="list-disc ">
                <li>Employer : {{ $position->employer->name }}</li>
                <li>location : {{ $position->location }}</li>
                <li>schedule : {{ $position->schedule }}</li>
                <li>salary : {{ $position->salary }}</li>
            </ul>
        </section>
        
        @if ($position->tags->count() > 0)
            <section>
                <x-section-heading>Tags</x-section-heading>
                <div class="mt-6 flex flex-wrap gap-2">
                    @foreach ($position->tags as $tag)
                        <x-tags :tag="$tag" />
                    @endforeach
                </div>
            </section>
        @endif
        <div>
</x-layout>
