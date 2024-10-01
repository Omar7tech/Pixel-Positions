<x-layout>
    <div class="space-y-10">
        <section class="text-center pt-6">
            <h1 class="font-bold lg:text-4xl text-2xl">
               let's Search Your next Job
            </h1>
            <form action="" class="mt-6">
                <input type="text" name="search" placeholder="Search for Web Developer"
                    class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl" value="{{request()->get('search')}}">
            </form>
        </section>
        @if (!request()->has('search'))
            <section class="pt-10">
                <x-section-heading>Top Jobs</x-section-heading>
                <div class="grid lg:grid-cols-3 gap-8 mt-6">
                    @foreach ($featured_positions as $job)
                        <x-job-card :job="$job" />
                    @endforeach
                </div>
            </section>

            <section>
                <x-section-heading>Tags</x-section-heading>
                <div class="mt-6 flex flex-wrap gap-2">
                    @foreach ($tags as $tag)
                        <x-tags href="/tag/{{ $tag->id }}" :tag="$tag" />
                    @endforeach
                </div>
            </section>
        @endif
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-3">
                @foreach ($positions as $job)
                    <x-job-card-wide :job="$job" />
                @endforeach
            </div>
        </section>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get all elements with the class 'job-card'
            const jobCards = document.querySelectorAll('.job-card');

            // Attach a click event listener to each card
            jobCards.forEach(card => {
                card.addEventListener('click', function() {
                    const url = card.getAttribute('data-url');
                    // Redirect to the URL when the card is clicked
                    window.location.href = url;
                });
            });
        });
    </script>

</x-layout>
